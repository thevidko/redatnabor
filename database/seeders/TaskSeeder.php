<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Task;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Získáme kategorie
        $work = Category::where('name', 'Práce')->first();
        $home = Category::where('name', 'Domácnost')->first();

        // Přidáme úkoly
        Task::create([
            'category_id' => $work->id,
            'title' => 'Dokončit prezentaci',
            'done' => false,
        ]);

        Task::create([
            'category_id' => $home->id,
            'title' => 'Vynést odpadky',
            'done' => true,
        ]);
    }
}
