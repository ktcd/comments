<?php

namespace Ktcd\Comments\Models;

use Ramsey\Uuid\Uuid;
use Ktcd\Comments\Models\Comment;

trait HasComment
{
    public function messages()
    {
        return $this->morphMany(Comment::class, 'receiver');
    }
}
