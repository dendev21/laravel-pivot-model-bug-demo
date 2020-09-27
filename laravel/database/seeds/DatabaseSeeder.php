<?php

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
        \App\Models\Post::query()->updateOrInsert(
            [
                'title' => 'test title'

            ]
        );
        \App\Models\Comment::query()->updateOrInsert(
            [
                'message' => 'test message'
            ]
        );
    }
}
