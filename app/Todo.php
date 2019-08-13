<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    protected $fillable = [
        'user_id', 'body', 'is_done',
    ];

    public function users()
    {
        return $this->belongsTo('App\User');
    }
}
