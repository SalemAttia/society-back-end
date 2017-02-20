<?php

use Illuminate\Database\Seeder;

class adminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       factory(App\admin::class,2)->create();
    }
}
