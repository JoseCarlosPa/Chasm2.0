<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User_model extends Model
{
    protected $table='users';
    protected $primaryKey='id';
    protected $fillable=['name', 'email', 'password','admin','address','city','state','country','pincode','mobile'];
}
