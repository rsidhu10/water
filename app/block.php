<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class block extends Model
{
    protected $primaryKey = 'id'; 
    protected $keyType = 'string';
    public $incrementing = false;
    protected $fillable = [
	    'id',
	    'zone_id',
	    'circle_id',
	    'district_id',
	    'block_name',
	    'block_pname',
	    
	];

	public function district()
    {
        return $this->belongsTo('App\District');
    } 
}