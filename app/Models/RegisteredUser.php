<?php

namespace App\Models;

use App\Models\VaccineCenter;
use Illuminate\Database\Eloquent\Model;

class RegisteredUser extends Model
{
    //
     protected $fillable = ['name','phone','email','nid','vaccine_center_id'];

     public function vaccineCenter()
    {
        return $this->belongsTo(VaccineCenter::class);
    }

}
