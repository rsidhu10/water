<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Zone extends Model
{
    protected $fillable = [
    	'id',
    	'zone_name',
    	'zone_pname',
    	'user_level'
    ];
}
