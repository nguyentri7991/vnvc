<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InjectionSchedules extends Model
{
    use HasFactory;
    protected $table = "injection_schedules";
    public function client() {
        return $this->belongsTo(Client::class,'id_client','id');
    }
    public function center() {
        return $this->belongsTo(VNVCCenter::class,'id_center','id');
    }
    public function room() {
        return $this->belongsTo(Room::class,'id_room','id');
    }
    public function detail_injection() {
        return $this->hasMany(DetailInjectionSchedules::class);
    }
}
