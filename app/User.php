<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Intervention\Image\Facades\Image;
use Intervention\Image\ImageManagerStatic;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'firstname', 'lastname', 'avatar'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function getAvatarAttribute($avatar){
        if($avatar){
            return "/img/avatars/{$this->id}.jpg";
        }
        return false ;

    }

    public function setAvatarAttribute($avatar){
        if(is_object($avatar) && $avatar->isValid()){
            ImageManagerStatic::make($avatar)->fit(150,150)->save(public_path()."/img/avatars/{$this->id}.jpg");
            $this->attributes['avatar'] = true;

        }
    }
}
