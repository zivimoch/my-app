<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        collect(
            [
                [
                    'task' => 'task1',
                    'mark' => 0,
                    'created_at' => now(),
                ],
                [
                    'task' => 'task2',
                    'mark' => 1,
                    'created_at' => now(),
                ]
            ]
        )->each(function($user)
        {
            \App\Models\Task::create($user);
        });
    }
}
