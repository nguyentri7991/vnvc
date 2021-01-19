<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailInjectionSchedules extends Model
{
    use HasFactory;
    protected $table = 'detail_injection_schedules';
    public function injection_schedules() {
        return $this->belongsTo(InjectionSchedules::class,'id_injection_schedules','id');
    }
    public function vaccine() {
        return $this->belongsTo(Vaccine::class,'id_vaccine','id');
    }
    public function employee() {
        return $this-> belongsTo(Employee::class,'id_employee','id');
    }
}
