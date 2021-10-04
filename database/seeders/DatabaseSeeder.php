<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Client;
use App\Models\Commercial;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(2)->create();
        Category::factory(3)->create();
        Client::factory(10)->create();
        Commercial::factory(90)->create();
    }
}
