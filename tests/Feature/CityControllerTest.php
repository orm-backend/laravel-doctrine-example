<?php

namespace Tests\Feature;

use App\Model\Event;
use App\Model\Image;
use OrmBackend\Repositories\Repository;
use Tests\TestCase;

class CityControllerTest extends TestCase
{
    protected $repository;
    
    protected function setUp(): void
    {
        if (! $this->app) {
            $this->refreshApplication();
        }
        
        $this->setUpTraits();
        
        foreach ($this->afterApplicationCreatedCallbacks as $callback) {
            $callback();
        }

        $this->repository = new Repository;
        
        $this->setUpHasRun = true;
    }
    
    public function testIndex()
    {
        $response = $this->get("/api/entities/app-model-city", [
            'Accept: application/json'
        ]);

        $response->assertStatus(200);
        $response->assertJson([
            'data' => [],
            'links' => [],
            'meta' => []
        ]);
    }

    public function testCreate()
    {
        $faker = \Faker\Factory::create();
        $displayOrder = $faker->optional()->numberBetween(1,100);
        $event = $this->repository->random(Event::class)->getSingleResult();
        $image = $this->repository->random(Image::class)->getSingleResult();
        
        $data = [
            'event' => $event->getId(),
            'image' => $faker->boolean ? $image->getId() : null,
            'name' => $faker->sentence(),
            'regionalCenter' => $faker->boolean,
            'displayOrder' => $displayOrder ? $displayOrder : 100,
            'seoKeywords' => $faker->words(6, true),
            'seoTitle' => $faker->sentence,
            'seoDescription' => $faker->paragraph,
            'createdBy' => 1
        ];
        
        $response = $this->json('POST', '/api/entities/app-model-city/create', $data);
        $response->assertStatus(201);
        
        return $response->json('id');
    }

    /**
     * @depends testCreate
     */
    public function testRead($id)
    {
        $response = $this->get("/api/entities/app-model-city/read/{$id}", [
            'Accept: application/json'
        ]);
        
        $response->assertStatus(200);
        
        return $id;
    }
    
    /**
     * @depends testRead
     */
    public function testUpdate($id)
    {
        $data = [
            'name' => 'Test Entity'
        ];
        
        $response = $this->json('PUT', "/api/entities/app-model-city/update/{$id}", $data);
        $response->assertStatus(200);
        
        return $id;
    }

    /**
     * @depends testUpdate
     */
    public function testSearch($id)
    {
        $data = [
            'filter' => [
                ["city.id", "eq", $id],
                ["city.name", "eq", "Test Entity"]
            ]
        ];
        
        $response = $this->json('POST', '/api/entities/app-model-city/search', $data);
        $response->assertStatus(200);
        $response->assertJson([
            'data' => [],
            'links' => [],
            'meta' => []
        ]);
        
        return $id;
    }
    
    /**
     * @depends testSearch
     */
    public function testDelete($id)
    {
        $response = $this->delete("/api/entities/app-model-city/delete/{$id}");
        $response->assertStatus(204);
    }

}
