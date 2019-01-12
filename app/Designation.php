<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Designation extends Model
{
    protected $primaryKey = 'id'; 
    protected $keyType = 'string';
    public $incrementing = false;
    protected $fillable = [
	    'id',
	    'category',
	    'designation',
	];

	public function employees()
    {
        return $this->hasMany('App\Employee');
    }
}
