<?php

use Illuminate\Database\Seeder;

class groupsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       factory(App\group::class,10)->create();
        
    }
}
