<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ward extends Model
{
    use HasFactory;
    protected $table = 'wards';

    public function district() {
        return $this->belongsTo(District::class,'id_district','id');
    }
    public function group() {
        return $this->hasMany(VNVCCenter::class);
    }
    public function employee() {
        return $this->hasMany(Employee::class);
    }
}
