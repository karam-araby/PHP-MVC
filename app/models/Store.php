<?php
namespace App\Models;
use \Illuminate\Database\Eloquent\Model as Model;

class Store extends Model
{
    protected $fillable = [
        'title', 'q', 'trade','sell','user_id','created_at','updated_at',
    ];
    protected $table = 'store';
    protected $dates = ['created_at', 'updated_at'];
}
