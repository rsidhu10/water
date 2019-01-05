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
	    'approvaltype',
	    'approvedby',
	    'approval_head',
	    'admin_approval_no',
	    'admin_approval_dt',
	    'amount',
	    'wbank_amt',
	    'nrdwp_amt',
	    'state_amt',
	];
}
