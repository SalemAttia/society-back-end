<?php

use Illuminate\Database\Seeder;

class stagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       factory(App\stage::class,10)->create();
        
    }
}
