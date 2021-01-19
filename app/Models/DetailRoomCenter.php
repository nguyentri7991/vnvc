<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailRoomCenter extends Model
{
    use HasFactory;
    protected $table = 'detail_room_center';
     public function detail_room() {
        return $this->belongsTo(DetailRoomCenter::class,'id_detail','id');
    }
    public function group() {
        return $this->belongsTo(VNVCCenter::class,'id_center','id');
    }
    public function room() {
        return $this->belongsTo(Room::class,'id_room','id');
    }
    public function employee() {
        return $this->belongsTo(Employee::class,'id_employee','id');
    }
}
