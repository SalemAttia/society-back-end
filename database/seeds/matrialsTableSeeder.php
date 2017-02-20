<?php

use Illuminate\Database\Seeder;

class matrialsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       factory(App\matrial::class,10)->create();
        
    }
}
