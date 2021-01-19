<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailRoom_Shift extends Model
{
    use HasFactory;
    protected $table = 'detail_room_employee';
    public function employee() {
        return $this->belongsTo(Employee::class,'id_employee','id');
    }
    public function room() {
        return $this->belongsTo(Room::class,'id_room','id');
    }
}
