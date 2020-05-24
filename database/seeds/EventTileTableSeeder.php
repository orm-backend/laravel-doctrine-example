<?php

use App\Model\Event;
use App\Model\EventTile;
use App\Model\Image;
use App\Model\User;
use Illuminate\Database\Seeder;

class EventTileTableSeeder extends Seeder
{
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
            
            $tile = new EventTile;
            $tile->setName($faker->sentence());
            $tile->setContent($faker->optional()->text);
            $tile->setDisplayOrder($displayOrder ? $displayOrder : 100);
            $tile->setSeoKeywords($faker->words(6, true));
            $tile->setSeoTitle($faker->sentence);
            $tile->setSeoDescription($faker->paragraph);
            $tile->setEvent($event);
            $tile->setCreatedBy($user);
            
            if ($imageId) {
                $tile->setImage($em->getRepository(Image::class)->find( $imageId ));
            }
            
            $em->persist($tile);
        }
        
        $em->flush();
    }
}
