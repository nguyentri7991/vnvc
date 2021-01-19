<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prevention extends Model
{
    use HasFactory;
    protected $table = 'preventions';
    public function detail_package() {
        return $this->hasMany(DetailPackageVaccine::class);
    }
}
