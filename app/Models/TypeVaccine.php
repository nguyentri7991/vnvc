<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeVaccine extends Model
{
    use HasFactory;
    protected $table = 'type_vaccines';

    public function vaccine() {
        return $this->hasMany(Vaccine::class);
    }
}
