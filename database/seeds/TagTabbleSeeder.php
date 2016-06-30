<?php

use Illuminate\Database\Seeder;
use App\Tags;

class TagTabbleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tags::truncate();

        factory('App\Tags', 10)->create();
    }
}
