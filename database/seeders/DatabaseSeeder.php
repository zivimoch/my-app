<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder; 
use \App\Models\Task; //jangan lupa kasih depedencynya

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            TaskSeeder::class,
            // Users::class kalo mau yg lain lagi bisa
        ]);
    }
}
