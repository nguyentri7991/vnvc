<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $table = 'employees';

    public function position() {
        return $this->belongsTo(Position::class,"id_position","id");
    }
    public function ward() {
        return $this->belongsTo(Ward::class,"id_ward","id");
    }
    public function group() {
        return $this->belongsTo(VNVCCenter::class,'id_center','id');
    }
    public function level() {
        return $this->belongsTo(Level::class,'id_level','id');
    }
    public function room_center() {
        return $this->hasMany(DetailRoomCenter::class);
    }

    public function detail_room_employee() {
        return $this->hasMany(DetailRoomEmployee::class);
    }
    public function detail_injection() {
        return $this->hasMany(DetailInjectionSchedules::class);
    }
}
