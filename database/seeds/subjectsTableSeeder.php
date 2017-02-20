<?php

use Illuminate\Database\Seeder;

class subjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       factory(App\subject::class,10)->create();
        
    }
}
