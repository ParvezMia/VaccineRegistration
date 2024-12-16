<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VaccineCenter extends Model
{
    //
    protected $fillable = ['name','daily_limit','original_limit'];
    
    public static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->daily_limit = $model->original_limit;
        });
    }

}
