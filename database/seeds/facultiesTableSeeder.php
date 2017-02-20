<?php

use Illuminate\Database\Seeder;

class facultiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       factory(App\faculty::class,2)->create();
        
    }
}
