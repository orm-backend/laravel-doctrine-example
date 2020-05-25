<?php

use App\Model\Event;
use App\Model\Image;
use App\Model\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use ItAces\Repositories\Repository;

class EventTableSeeder extends Seeder
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
            $endDate = $faker->optional()->dateTimeBetween('now', '+7 days');

            $event = new Event;
            $event->setName($faker->word);
            $event->setUrlRoute($faker->unique()->word);
            $event->setStartDate(Carbon::instance($faker->dateTimeBetween('now', '+7 days')));
            $event->setEndDate($endDate ? Carbon::instance($endDate) : null);
            $event->setLocation($faker->country);
            $event->setContent($faker->text);
            $event->setStatus($faker->randomElement(['created' ,'approved', 'rejected']));
            $event->setSeoKeywords($faker->words(6, true));
            $event->setSeoTitle($faker->sentence);
            $event->setSeoDescription($faker->paragraph);
            $event->setCreatedBy($user);
            
            if ($faker->boolean) {
                $image = $this->repository->random(Image::class)->getSingleResult();
                $event->setImage($image);
            }
            
            $em->persist($event);
        }
        
        $em->flush();
    }

}
