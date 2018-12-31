<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
   	protected $primaryKey = 'id'; 
    protected $keyType = 'string';
    public $incrementing = false;
    protected $fillable = [
	    'id',
	    'zone_id',
	    'circle_id',
	    'district_name',
	    'district_pname',
	    'district_sname',
	    'user_level'
	];

	public function circle()
    {
        return $this->belongsTo('App\Circle');
    }

    public function divisions()
    {
        return $this->hasMany('App\Division');
    }    

}
