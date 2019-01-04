<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Adminapproval extends Model
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
	    'scheme_id',
	    'approval_head',
	    'approval_no',
	    'approval_dt',
	    'approval_amt',
	    'wbank_amt',
	    'nrdwp_amt',
	    'state_amt',
	];
}
