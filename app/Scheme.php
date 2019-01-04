<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Scheme extends Model
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
	    'subdivision_id',
	    'block_id',
	    'scheme_name',
	    'scheme_pname',
	    'lpcd',
	    'swap',
	    'own_by',
	    'operated_by',
	    'coerage_status',
	    'functional',
	    'multi_village',
	    'source',



	];

	public function block()
    {
        return $this->belongsTo('App\Block');
    } 
}
