<?php

namespace babblerchat;

use Illuminate\Database\Eloquent\Model;

class Developersmodel extends Model
{
    protected $conection= 'babbler';
    protected $table='users';
    protected $primaryKey = 'id';
    public $timesstamps = false;
    protected $fillable = [
    	'name',
    	'email',
    ];
}
