<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Item;

class ItemsTableSeeder extends Seeder
{
    public function run()
    {
        // Create 5000 sample items
        Item::factory()->count(5000)->create();
    }
}