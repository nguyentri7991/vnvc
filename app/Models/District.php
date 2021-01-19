<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    use HasFactory;
    protected $table = 'districts';
    public function city() {
        return $thí->belongsTo(City::class,'id_city','id');
    }

    public function ward() {
        return $this->hasMany(Ward::class);
    }
}
