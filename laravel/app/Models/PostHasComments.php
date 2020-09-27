<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class PostHasComments extends Pivot
{
    public $timestamps = false;

    public const UPDATED_AT = null; // Has no effect

    protected $table = 'post_has_comments';
}
