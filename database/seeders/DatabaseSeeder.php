<?php

namespace Database\Seeders;
use App\Models\user;
use App\Models\Products;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)->create();
        Products::factory(12)->create();
    }
}
