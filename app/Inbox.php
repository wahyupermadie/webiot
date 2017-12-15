<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inbox extends Model
{
    public $timestamps = false;
    protected $table = 'inbox';
    protected $fillable = [
        'chat_id', 'message','image'
    ];
}
