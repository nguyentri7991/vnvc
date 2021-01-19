<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoomCenter extends Model
{
    use HasFactory;
    protected $table = 'room_centers';
    public function group() {
        return $this->belongsTo(VNVCCenter::class,'id_center','id');
    }
    public function room() {
        return $this->belongsTo(Room::class,'id_room','id');
    }
    public function employee() {
        return $this->belongsTo(Employee::class,'id_employee','id');
    }
    public function detail_room() {
        return $this->hasMany(DetailRoomCenter::class);
    }
}
