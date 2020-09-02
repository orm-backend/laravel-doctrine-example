<?php

use App\Model\Image;
use App\Model\User;
use Illuminate\Database\Seeder;
use OrmBackend\Repositories\Repository;

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
        $disk = config('filesystems.default');
        $rootPath = config("filesystems.disks.{$disk}.root");
        
        for ($i = 0; $i < 100; $i++) {
            $image = $faker->image($rootPath . '/' . config('ormbackend.upload.img'), 640, 480, null, false);

            if ($image) {
                $data = [
                    'createdBy' => $user,
                    'name' => $image,
                    //'urlRoute' => $faker->unique()->word(),
                    'altText' => $faker->sentence(),
                    'path' => config('ormbackend.upload.img') . '/' . $image,
                    'description' => $faker->optional()->paragraph(),
                    'photoCredit' => $faker->optional()->text
                ];
                
                $this->repository->createOrUpdate(Image::class, $data);
            }
        }
        
        $this->repository->em()->flush();
    }
}
