<?php

use Illuminate\Database\Seeder;

class hasSubjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       factory(App\hasSubject::class,10)->create();
        
    }
}
