<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
      'comment' , 'user_id', 'token', 'rating'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
