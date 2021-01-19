<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;
    protected $table = 'packages';
    public function type() {
        return $this->belongsTo(TypePackage::class,'id_type','id');
    }
    public function detail_package() {
        return $this->hasMany(DetailPackageVaccine::class);
    }
    public function registration_injection() {
        return $this->hasMany(RegistrationInjection::class);
    }
    public function detail_order(){
        return $this->hasMany(DetailOrder::class);
    }
}
