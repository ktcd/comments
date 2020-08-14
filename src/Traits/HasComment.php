<?php

namespace Ktcd\Comments\Traits;

use Ramsey\Uuid\Uuid;
use Ktcd\Comments\Models\Comment;

trait HasComment
{
    public function comments()
    {
        return $this->morphMany(Comment::class, 'post');
    }
}
