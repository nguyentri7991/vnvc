<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guardian extends Model
{
    use HasFactory;
    protected $table = 'guardians';
    public function detail_guardian() {
        return $this->hasMany(DetailGuardian::class);
    }
}