<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gpfapprovedby extends Model
{
    protected $primaryKey = 'id'; 
    protected $keyType = 'string';
    public $incrementing = false;
    protected $fillable = [
    	'id',
    	'approvedby',
    ];

	public function gpfadvances()
	    {
	        return $this->hasMany('App\Gpfadvance');
	    }
}	    