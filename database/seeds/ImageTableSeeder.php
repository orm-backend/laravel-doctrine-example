<?php

use Illuminate\Database\Seeder;
use ItAces\Repositories\Repository;
use App\Model\Image;
use App\Model\User;

class ImageTableSeeder extends Seeder
{

    private $repository;
    
    public function __construct(Repository $repository) {
        $this->repository = $repository;
    }
    
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = $this->repository->findOrFail(User::class, 1);
        $faker = \Faker\Factory::create();
        
        for ($i = 0; $i < 100; $i++) {
            $data = [
                'createdBy' => $user,
                'name' => $faker->word . '.jpeg',
                'urlRoute' => $faker->unique()->word,
                'altText' => $faker->sentence(),
                'path' => 'images/originals/' . $faker->md5 . '.jpeg',
                'description' => $faker->optional()->paragraph(),
                'photoCredit' => $faker->optional()->text
            ];
            
            $this->repository->createOrUpdate(Image::class, $data);
        }
        
        $this->repository->em()->flush();
    }
}
