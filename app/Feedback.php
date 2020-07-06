<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    protected $fillable = [
       'name', 'subject', 'message', 'token', 'email'
    ];
    public static function newFeedback($request){
        Feedback::create([
            'name' => $request->name,
            'subject' => $request->subject,
            'message' => $request->message,
            'email' => $request->email,
        ]);
    }
}
