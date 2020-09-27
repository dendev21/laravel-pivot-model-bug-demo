<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Post extends Model
{
    protected $table = 'post';

    public function comments(): BelongsToMany
    {
        return $this->belongsToMany(Comment::class, 'post_has_comments')
            ->using(PostHasComments::class)
            ->withPivot('created_at');
    }
}
