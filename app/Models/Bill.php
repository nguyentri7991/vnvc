<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    use HasFactory;
    protected $table = "bills";
    public function client() {
        return $this->belongsTo(Client::class,'id_client','id');
    }
    public function type() {
        return $this->belongsTo(TypeBill::class,'id_type','id');
    }
    public function center() {
        return $this->belongsTo(VNVCCenter::class,'id_center','id');
    }
    public function employee() {
        return $this->belongsTo(Employee::class,'id_employee','id');
    }
    public function detail_bill() {
        return $this->hasMany(DetailBill::class);
    }
}
