<?php

use Illuminate\Database\Seeder;

class answersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       factory(App\answer::class,10)->create();
        
    }
}
