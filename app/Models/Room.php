<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;
    protected $table = 'rooms';

    public function room_center() {
        return $this->hasMany(DetailRoomCenter::class);
    }
    public function detail_room_employee() {
        return $this->hasMany(DetailRoomEmployee::class);
    }
    public function injection_schedules() {
        return $this->hasMany(InjectionSchedules::class);
    }
}
