<?php

namespace Tests\Feature;

use App\Model\Image;
use Illuminate\Support\Str;
use Tests\TestCase;
use OrmBackend\Repositories\Repository;

class EventControllerTest extends TestCase
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
        $response = $this->get('/api/entities/app-model-event', [
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
        $image = $this->repository->random(Image::class)->getSingleResult();

        $data = [
            'image' => $faker->boolean ? $image->getId() : null,
            'name' => $faker->sentence(),
            'urlRoute' => Str::random(),
            'startDate' => $faker->dateTimeBetween('now', '+7 days')->getTimestamp(),
            'endDate' => $faker->dateTimeBetween('now', '+30 days')->getTimestamp(),
            'location' => $faker->country,
            'content' => $faker->text,
            'status' => $faker->randomElement(['created' ,'approved', 'rejected']),
            'seoKeywords' => $faker->words(6, true),
            'seoTitle' => $faker->sentence,
            'seoDescription' => $faker->paragraph,
            'createdBy' => 1
        ];

        $response = $this->json('POST', '/api/entities/app-model-event/create', $data);
        $response->assertStatus(201);
        
        return $response->json('id');
    }
    
    /**
     * @depends testCreate
     */
    public function testRead($id)
    {
        $response = $this->get("/api/entities/app-model-event/read/{$id}", [
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
        
        $response = $this->json('PUT', "/api/entities/app-model-event/update/{$id}", $data);
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
                ["event.id", "eq", $id],
                ["event.name", "eq", "Test Entity"]
            ]
        ];
        
        $response = $this->json('POST', '/api/entities/app-model-event/search', $data);
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
        $response = $this->delete("/api/entities/app-model-event/delete/{$id}");
        $response->assertStatus(204);
    }
    
}
