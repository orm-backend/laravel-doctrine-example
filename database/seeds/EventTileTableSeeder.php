<?php

use App\Model\Event;
use App\Model\EventTile;
use App\Model\Image;
use App\Model\User;
use Illuminate\Database\Seeder;
use OrmBackend\Repositories\Repository;

class EventTileTableSeeder extends Seeder
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
            $event = $this->repository->random(Event::class)->getSingleResult();
            
            $tile = new EventTile;
            $tile->setName($faker->sentence());
            $tile->setContent($faker->optional()->text);
            $tile->setDisplayOrder($displayOrder ? $displayOrder : 100);
            $tile->setSeoKeywords($faker->words(6, true));
            $tile->setSeoTitle($faker->sentence);
            $tile->setSeoDescription($faker->paragraph);
            $tile->setEvent($event);
            $tile->setCreatedBy($user);
            
            if ($faker->boolean) {
                $image = $this->repository->random(Image::class)->getSingleResult();
                $tile->setImage($image);
            }
            
            $em->persist($tile);
        }
        
        $em->flush();
    }
}
