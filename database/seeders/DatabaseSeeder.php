<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Article;
use App\Models\Customer;
use App\Models\Order;
use App\Models\Item;
use App\Models\Menu;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Article::factory(10)->create();
        Customer::factory(10)->create();
        Order::factory(10)->create();
        Item::factory(10)->create();
        Menu::factory(10)->create();


        User::factory(10)->create();
    }
}