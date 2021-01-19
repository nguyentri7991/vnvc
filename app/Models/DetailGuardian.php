<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailGuardian extends Model
{
    use HasFactory;
    protected $table = 'detail_guardian';
    public function client() {
        return $this->belongsTo(Client::class,'id_client','id');
    }
    public function guardian() {
        return $this->belongsTo(Guardian::class,'id_guardian','id');
    }
}
