<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $table = 'clients';
    public function registration_injection() {
        return $this->hasMany(RegistrationInjection::class);
    }
    public function detail_guardian() {
        return $this->hasMany(DetailGuardian::class);
    }
    public function order() {
        return $this->hasMany(Order::class);
    }
    public function injection_schedules() {
        return $this->hasMany(InjectionSchedules::class);
    }
}
