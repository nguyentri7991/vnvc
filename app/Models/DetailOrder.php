<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailOrder extends Model
{
    use HasFactory;
    protected $table = "detail_orders";
    public function package() {
        return $this->belongsTo(Package::class,'id_package','id');
    }
    public function vaccine() {
        return $this->belongsTo(Vaccine::class,'id_vaccine','id');
    }
    public function order() {
        return $this->belongsTo(Order::class,'id_order','order_id');
    }
}
