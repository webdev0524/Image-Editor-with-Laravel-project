<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = 'news';
    protected $fillable = [
      'banner', 'subject', 'body', 'user_id', 'token'
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
}
