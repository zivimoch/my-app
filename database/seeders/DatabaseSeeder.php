<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder; 
use \App\Models\Task; //jangan lupa kasih depedencynya
use \App\Models\User;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            TaskSeeder::class,
            UserSeeder::class
        ]);
    }
}
