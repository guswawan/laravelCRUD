<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //
    protected $fillable = ['firstname', 'lastname', 'gender', 'country', 'address'];
    protected $primaryKey = 'id';
    // public $timestamps = false;
}
