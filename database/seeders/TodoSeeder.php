<?php

namespace Database\Seeders;

use App\Models\Todo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TodoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Todo::create([
            'name' => 'Learning Laravel 9',
            'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolores labore necessitatibus, explicabo nam similique ipsa sit accusamus quas distinctio. Atque, laboriosam eum. Nihil incidunt qui exercitationem quidem nesciunt earum impedit.',
            'is_done' => true
        ]);

        Todo::create([
            'name' => 'Create CRUD Example Laravel 9',
            'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolores labore necessitatibus, explicabo nam similique ipsa sit accusamus quas distinctio. Atque, laboriosam eum. Nihil incidunt qui exercitationem quidem nesciunt earum impedit.',
            'is_done' => false
        ]);

        Todo::create([
            'name' => 'Start bigger project using Laravel 9',
            'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolores labore necessitatibus, explicabo nam similique ipsa sit accusamus quas distinctio. Atque, laboriosam eum. Nihil incidunt qui exercitationem quidem nesciunt earum impedit.',
            'is_done' => false
        ]);
    }
}
