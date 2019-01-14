<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class motive extends Model
{
    protected $primaryKey = 'id'; 
    protected $keyType = 'string';
    public $incrementing = false;
    protected $fillable = [
    	'id',
    	'motive',
    ];

	public function gpfadvances()
	    {
	        return $this->hasMany('App\Gpfadvance');
	    }
}
