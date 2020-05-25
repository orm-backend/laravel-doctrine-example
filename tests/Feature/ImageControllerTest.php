<?php

namespace Tests\Feature;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class ImageControllerTest extends TestCase
{
    
    public function testIndex()
    {
        $response = $this->get('/api/entities/app-model-image', [
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
        $file = UploadedFile::fake()->image($faker->word . '.jpg');
        $data = [
            'image' => $file,
            'name' => $faker->word . '.jpeg',
            'urlRoute' => Str::random(),
            'altText' => $faker->sentence(),
            'description' => $faker->optional()->paragraph(),
            'photoCredit' => $faker->optional()->text,
            'createdBy' => 1
        ];
        
        $response = $this->json('POST', '/api/entities/app-model-image/create', $data);
        $response->assertStatus(201);
        Storage::disk(config('filesystems.default', 'local'))->assertExists('images/originals/' . $file->hashName());
        
        return $response->json('id');
    }
    
    /**
     * @depends testCreate
     */
    public function testRead($id)
    {
        $response = $this->get("/api/entities/app-model-image/read/{$id}", [
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
            'altText' => 'Test Entity'
        ];
        
        $response = $this->json('PUT', "/api/entities/app-model-image/update/{$id}", $data);
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
                ["image.id", "eq", $id],
                ["image.altText", "eq", "Test Entity"]
            ]
        ];
        
        $response = $this->json('POST', '/api/entities/app-model-image/search', $data);
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
        $response = $this->delete("/api/entities/app-model-image/delete/{$id}");
        $response->assertStatus(204);
    }
    
}
