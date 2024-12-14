<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RegisteredUser extends Model
{
    //
     protected $fillable = ['name','status','phone','email','password','nid','vaccine_center_id'];
}
