<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    protected $table='post';
    protected $fillable=[
        'category','product_name','detail','mobile_number','price','upload'
    ];
    
}