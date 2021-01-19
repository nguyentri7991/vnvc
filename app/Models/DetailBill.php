<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailBill extends Model
{
    use HasFactory;
    protected $table ="detail_bills";
    public function bill() {
        return $this->belongsTo(Bill::class,'id_bill','id');
    }
    public function vaccine() {
        return $this->belongsTo(Vaccine::class,'id_vaccine','id');
    }
}
