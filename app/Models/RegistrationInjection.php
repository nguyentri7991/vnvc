<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegistrationInjection extends Model
{
    use HasFactory;
    protected $table = 'registration_injection';
    public function client() {
        return $this->belongsTo(Client::class,'id_client','id');
    }
    public function vaccine() {
        return $this->belongsTo(Vaccine::class,'id_vaccine','id');
    }
    public function package() {
        return $this->belongsTo(Package::class,'id_package','id');
    }
    public function group() {
        return $this->belongsTo(VNVCCenter::class,'id_center','id');
    }
}
