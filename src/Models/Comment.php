<?php

namespace Ktcd\Comments\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'id',
        'sender_id',
        'sender_type',
        'post_id',
        'post_type',
        'text',
        'was_read',
        'created_at',
        'updated_at'
    ];

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->setTable(config('ktcd_comments.comment_table'));
    }

    public function post()
    {
        return $this->morphTo('post',  'post_type', 'post_id'); 
    }

    public function sender()
    {
        return $this->morphTo('sender',  'sender_type', 'sender_id'); 
    }
}
