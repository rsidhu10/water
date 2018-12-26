<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Circle extends Model
{
	protected $primaryKey = 'id'; 
    protected $keyType = 'string';
    public $incrementing = false;
    protected $fillable = [
	    'id',
	    'zone_id',
	    'circle_name',
	    'circle_pname',
	    'user_level'
	];

}
