<?php

namespace Tests\Feature;

use App\Model\Event;
use App\Model\Image;
use Tests\TestCase;
use OrmBackend\Repositories\Repository;

class EventTileControllerTest extends TestCase
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
        $response = $this->get('/api/entities/app-model-event_tile', [
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
            'content' => $faker->optional()->text,
            'displayOrder' => $displayOrder ? $displayOrder : 100,
            'seoKeywords' => $faker->words(6, true),
            'seoTitle' => $faker->sentence,
            'seoDescription' => $faker->paragraph,
            'createdBy' => 1
        ];
        
        $response = $this->json('POST', '/api/entities/app-model-event_tile/create', $data);
        $response->assertStatus(201);
        
        return $response->json('id');
    }
    
    /**
     * @depends testCreate
     */
    public function testRead($id)
    {
        $response = $this->get("/api/entities/app-model-event_tile/read/{$id}", [
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
        
        $response = $this->json('PUT', "/api/entities/app-model-event_tile/update/{$id}", $data);
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
                ["eventTile.id", "eq", $id],
                ["eventTile.name", "eq", "Test Entity"]
            ]
        ];
        
        $response = $this->json('POST', '/api/entities/app-model-event_tile/search', $data);
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
        $response = $this->delete("/api/entities/app-model-event_tile/delete/{$id}");
        $response->assertStatus(204);
    }
    
}
