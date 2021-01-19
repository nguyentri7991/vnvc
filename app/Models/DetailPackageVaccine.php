<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailPackageVaccine extends Model
{
    use HasFactory;
    protected $table = 'detail_package_vaccine';

    public function package() {
        return $this->belongsTo(Package::class,'id_package','id');
    }
    public function vaccine() {
        return $this->belongsTo(Vaccine::class,'id_vaccine','id');
    }
    public function prevention() {
        return $this->belongsTo(Prevention::class,'id_prevention','id');
    }
}
