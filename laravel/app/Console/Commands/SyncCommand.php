<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class SyncCommand extends Command
{
    protected $signature = 'demo:sync';

    protected $description = 'Command that reproduces the bug';

    public function handle()
    {
        /** @var \App\Models\Post $post */
        /** @var \App\Models\Comment $comment */
        $post = \App\Models\Post::query()->firstOrFail();
        $comment = \App\Models\Comment::query()->firstOrFail();
        $post->comments()->sync(
            [
                $comment->id => [
                    'created_at' => new \Illuminate\Support\Carbon()
                ]
            ]
        );
    }
}
