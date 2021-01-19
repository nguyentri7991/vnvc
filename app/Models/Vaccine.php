<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vaccine extends Model
{
    use HasFactory;
    protected $table = 'vaccines';

    public function type() {
        return $this->belongsTo(TypeVaccine::class,'id_type','id');
    }
    public function supplier() {
        return $this->belongsTo(Supplier::class,'id_supplier','id');
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
    public function detail_injection() {
        return $this->hasMany(DetailInjectionSchedules::class);
    }
}
