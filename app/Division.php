<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Division extends Model
{
    protected $primaryKey = 'id'; 
    protected $keyType = 'string';
    public $incrementing = false;
    protected $fillable = [
	    'id',
	    'zone_id',
	    'circle_id',
	    'district_id',
	    'division_name',
	    'division_pname',
	    'user_level',
	];

	public function district()
    {
        return $this->belongsTo('App\District');
    }    

    public function subdivisions()
    {
        return $this->hasMany('App\Subdivision');
    }
}

