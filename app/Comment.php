<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public $guarded = ['id'];

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function getUsernameAttribute($username){
        if($this->user_id){
            return $this->user->name;
        }
        return $username;
    }
}
