<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailShift extends Model
{
    use HasFactory;
    protected $table = 'detail_shift';
    public function shift() {
        return $this->belongsTo(Shift::class,'id_shift','id');
    }
    public function employee() {
        return $this->belongsTo(Employee::class,'id_employee','id');
    }
    public function room() {
        return $this->belongsTo(Room::class,'id_room','id');
    }
}
