<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gpfadvance extends Model
{
    protected $fillable = [
	    'id',
	    'year',
	    'category',
	    'gpf_no',
	    'emp_name',
	    'emp_designation',
	    'amount',
	    'refundable',
	    'motive',
	    'order_no',
	    'order_dt',
	    'bill_no',
	    'bill_dt',
	    'token_no',
	    'tr_voucher_no',
	    'tr_voucher_dt',
	    'cashbook_no',
	    'cashbook_dt',
	    'remarks',
	    'ref_sr',
	    'flaged',
	    'retirement_dt',
	];
}
