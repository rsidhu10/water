<?php
/*
one to many | hasmany
many to one | belongto
many to many | belongstomany
one to one | hasOne(table with no foreign key) belongsTo(table with foreign key)

*/
namespace App;

use Illuminate\Database\Eloquent\Model;

class Zone extends Model
{
    protected $primaryKey = 'id'; 
    protected $keyType = 'string';
    public $incrementing = false;
    protected $fillable = [
    	'id',
    	'zone_name',
    	'zone_pname',
    	'user_level'
    ];
}
