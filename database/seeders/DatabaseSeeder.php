<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Task; // Import the Task model

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        Task::factory(10)->create();
    }
}

