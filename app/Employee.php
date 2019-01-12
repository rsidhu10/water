<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $primaryKey = 'id'; 
    protected $keyType = 'string';
    public $incrementing = false;
    protected $fillable = [
	    'id',
	    'designation_id',
	    'emp_name',
	    'pan_no',
	];

	public function designation()
    {
        return $this->belongsTo('App\Designation');
    }   

}
