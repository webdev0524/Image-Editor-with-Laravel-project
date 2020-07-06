<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class User extends \TCG\Voyager\Models\User
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'email', 'password', 'last_name', 'job_title', 'profile_picture', 'token',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function comments(){
        return $this->hasMany(Comment::class);
    }

    public function news(){
        return $this->hasMany(News::class);
    }

    public static function newUser($email, $password, $name = null){
        $register_user = User::create([
           'password' => bcrypt($password),
            'email' => $email,
            'first_name' => $name == null ? null : $name
        ]);
    }

    public static function processImage($image, $folder=""){
        $image_name = Str::random(10).'.'.$image->getClientOriginalExtension();
        $is_file_uploaded = Storage::disk('public')->putFileAs('/'.$folder,$image, $image_name);
        return $image_name;
    }
}
