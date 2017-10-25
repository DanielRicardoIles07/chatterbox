<?php

namespace chatterbox;

use Illuminate\Database\Eloquent\Model;

class Developersmodel extends Model
{
    protected $conection= 'developers';
    protected $table='users';
    protected $primaryKey = 'id';
    public $timesstamps = false;
    protected $fillable = [
    	'name',
    	'email',
    ];
}
