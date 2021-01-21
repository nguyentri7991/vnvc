<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Package;
use App\Models\TypePackage;
use App\Models\Vaccine;
use App\Models\Order;
use App\Models\DetailOrder;
use App\Models\Client;
use Cart;

class CartController extends Controller
{
    public function handleSaveCard(Request $request) {
        $package_id = $request -> id_package;
        $vaccine_id = $request -> id_vaccine;
        $quantity = $request -> quantity;
        $package_info = Package::where('id',$package_id)->first();
        $vaccine_info = Vaccine::where('id',$vaccine_id)->first();
        if($package_id) {
            $data['id'] = $package_id;
            $data['qty'] = $quantity;
            $data['name'] = $package_info->name;
            $data['price'] = $package_info->price;
            $data['weight'] = $package_info->price;
            $data['options']['image'] = $package_info->image;
            $data['options']['packae'] = $package_info->id;
        } else {
            $data['id'] = $vaccine_id;
            $data['qty'] = $quantity;
            $data['name'] = $vaccine_info->name;
            $data['price'] = $vaccine_info->price_out;
            $data['weight'] = $vaccine_info->price_out;
            $data['options']['image'] = $vaccine_info->image;
            $data['options']['vaccine'] = $vaccine_info->id;
        }
        Cart::add($data);
        return \redirect() -> route('client.cart');
    }
    public function indexCart() {
        $type_package = TypePackage::all('id','name');
        $vaccine = Vaccine::all('id','name','price_out');
        return view('client.cart.cart',['vaccine'=>$vaccine,'type_package'=>$type_package]);
    }
    public function deleteCart($rowId) {
        Cart::update($rowId,0);
        return \redirect()->route('client.cart');
    }
    public function handleUpdateQuantity(Request $request) {
        $rowId = $request -> rowId_cart;
        if($rowId == null) {
            return \redirect()->route('client.cart');
        }
        $qty = $request -> quantity_cart;
        Cart::update($rowId,$qty);
        return \redirect()->route('client.cart');
    }
    public function payment() {
        return view('client.cart.payment');
    }
    public function handlePayment(Request $request) {

        $client = new Client;
        $client -> name = $request -> name;
        $client -> date_of_birth = $request -> date_of_birth;
        $client -> vaccination_code = $request -> vaccination_code;
        $client -> email = $request -> email;
        $client -> phone = $request -> phone;
        $client -> household_book = $request -> household_book;
        $client -> id_ward = $request -> ward;
        $client -> gender = $request -> gender;
        $client->save();
        $id_client = $client -> id;
        $order = new Order;
        $order -> id_customer = session() ->get('customer_id');
        $order -> id_center = $request -> center;
        $order -> id_client = $id_client;
        $order -> order_total = Cart::total();
        $order -> order_status = "Chưa Thanh Toán";
        $order -> save();
        $id_order = $order -> id;
        $content = Cart::content();
        //var_dump($content);
        //exit;
        foreach($content as $itemp_content) {
            $detail_order = new DetailOrder;
            $detail_order -> id_order = $id_order;
            if($itemp_content -> options->vaccine) {
                $detail_order -> id_vaccine = $itemp_content -> id ;
                $detail_order -> id_package = null;
            } else {
                $detail_order -> id_vaccine = null;
                $detail_order -> id_package = $itemp_content -> id;
            }
            $detail_order -> order_quantity = $itemp_content -> qty;
            $detail_order -> order_price = $itemp_content -> price;
            $detail_order -> save();
        }
        return \redirect() -> route('client.home');
    }

    public function historyOrderByCustomer(Request $request) {
        $id_customer = session() -> get('customer_id');
        $history_order = Order::join('vnvc_centers','vnvc_centers.id','=','orders.id_center')
        ->join('customers','customers.id','=','orders.id_customer')
        ->join('clients','clients.id','=','orders.id_client')
        ->where('orders.id_customer',$id_customer)
        ->get(['vnvc_centers.name as name_center','clients.name as name_client','orders.order_total','order.order_stauts']);
        return view('client.cart.history_order',['history_order'=>$history_order]);
    }

}
