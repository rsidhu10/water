<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Circle extends Model
{
    protected $fillable = [
	    'id',
	    'zone_id',
	    'circle_name',
	    'circle_pname',
	    'user_level'
	];

}
