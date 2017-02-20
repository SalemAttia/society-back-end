<?php

use Illuminate\Database\Seeder;

class followersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       factory(App\follower::class,10)->create();
        
    }
}
