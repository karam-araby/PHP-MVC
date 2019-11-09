<?php

namespace App;
use \Illuminate\Database\Eloquent\Model as Model;

class User extends Model
{
    protected $fillable = [
        'name', 'email', 'password',
    ];
}
