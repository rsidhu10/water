<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gpfcategory extends Model
{
    protected $primaryKey = 'id'; 
    protected $keyType = 'string';
    public $incrementing = false;
    protected $fillable = [
    	'id',
    	'category'
    	
    ];

    public function designations()
	    {
	        return $this->hasMany('App\Designation');
	    }
}
