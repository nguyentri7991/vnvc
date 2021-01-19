<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table = "orders";
    public function detail_order(){
        return $this->hasMany(DetailOrder::class);
    }
    public function center() {
        return $this->belongsTo(Center::class,'id_center','id');
    }
    public function client() {
        return $this->belongsTo(Client::class,'id_client','id');
    }
}
