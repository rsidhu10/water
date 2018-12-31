<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subdivision extends Model
{
    protected $primaryKey = 'id'; 
    protected $keyType = 'string';
    public $incrementing = false;
    protected $fillable = [
	    'id',
	    'zone_id',
	    'circle_id',
	    'district_id',
	    'division_id',
	    'subdivision_name',
	    'subdivision_pname',
	    'user_level',
	];

	public function division()
    {
        return $this->belongsTo('App\Division');
    }    

    public function schemes()
    {
        return $this->hasMany('App\Scheme');
    }
}
