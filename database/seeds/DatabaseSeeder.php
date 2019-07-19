<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      // commento da decommentare per far partire il seeder e modificare quello che serve
      // $this->call(UsersTableSeeder::class);
        $this->call(PostsTableSeeder::class);
    }
}
