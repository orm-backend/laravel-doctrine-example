<?php

use App\Model\Event;
use App\Model\City;
use App\Model\Image;
use App\Model\User;
use Illuminate\Database\Seeder;
use ItAces\Repositories\Repository;

class CityTableSeeder extends Seeder
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
        /**
         * 
         * @var \Doctrine\ORM\EntityManager $em
         */
        $em = app('em');
        $faker = \Faker\Factory::create();
        $user = $em->getRepository(User::class)->find( 1 );
        
        for ($i = 0; $i < 100; $i++) {
            $displayOrder = $faker->optional()->numberBetween(1,100);
            $imageId = $faker->optional()->numberBetween(1,100);
            $event = $em->getRepository(Event::class)->find( $faker->numberBetween(1,100) );
            
            $city = new City;
            $city->setName($faker->sentence());
            $city->setUrlRoute($faker->unique()->word);
            $city->setRegionalCenter($faker->boolean);
            $city->setSeoKeywords($faker->words(6, true));
            $city->setSeoTitle($faker->sentence);
            $city->setSeoDescription($faker->paragraph);
            $city->setEvent($event);
            $city->setDisplayOrder($displayOrder ? $displayOrder : 100);
            $city->setCreatedBy($user);
            
            if ($imageId) {
                $city->setImage($em->getRepository(Image::class)->find( $imageId ));
            }
            
            $em->persist($city);
        }
        
        $em->flush();
    }

}
