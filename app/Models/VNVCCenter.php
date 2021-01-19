<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VNVCCenter extends Model
{
    use HasFactory;
    protected $table = 'vnvc_centers';

    public function ward() {
        return $this->belongsTo(Ward::class,'id_ward','id');
    }
    public function employee() {
        return $this->hasMany(Employee::class);
    }
    public function room_center() {
        return $this->hasMany(DetailRoomCenter::class);
    }
    public function detail_room_employee() {
        return $this->hasMany(DetailRoomEmployee::class);
    }
    public function registration_injection() {
        return $this->hasMany(RegistrationInjection::class);
    }
    public function order() {
        return $this->hasMany(Order::class);
    }
    public function injection_schedules() {
        return $this->hasMany(InjectionSchedules::class);
    }
}
