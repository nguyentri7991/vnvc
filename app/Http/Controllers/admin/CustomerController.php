<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Order;
use App\Models\DetailOrder;
use App\Models\Client;
use App\Models\VNVCenter;
use App\Models\Employee;


class CustomerController extends Controller
{
    //Thống kê đơn đặt hàng
    public function findAllOrderByAdmin() {
        $result_order = Order::join('vnvc_centers','vnvc_centers.id','=','orders.id_center')
            ->join('customers','customers.id','=','orders.id_customer')
            ->join('clients','clients.id','=','orders.id_client')
            ->get(['orders.order_id','vnvc_centers.name as name_center','customers.customer_name','clients.name as name_client','orders.order_total','orders.order_status']);
            return view('admin.order.index',['result_order'=>$result_order]);
    }
    public function detailOrderByOrderId($id) {
        $result_order_detail = DetailOrder::where('id_order',$id)->get();
        return view('admin.order.detail',['result_order_detail'=>$result_order_detail]);
    }
}
