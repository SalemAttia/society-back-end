<?php

use Illuminate\Database\Seeder;

class doctorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       factory(App\doctor::class,2)->create();
        
    }
}
