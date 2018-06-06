<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class somo extends Model
{
    //
    Protected $table = "somo";
    protected $fillable = [
        'id',
        'name',
        'number',
        'post'
    ];
}
