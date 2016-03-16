<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projet extends Model
{
    protected  $fillable = [
        'name', 'adresse', 'tel', 'description', 'email', 'type', 'context', 'objectif', 'contrainte',
    ];

}
