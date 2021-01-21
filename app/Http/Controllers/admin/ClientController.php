<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\Customer;
use App\Models\City;
use App\Models\VNVCCenter;
use App\Models\InjectionSchedules;
use App\Models\DetailInjectionSchedules;
class ClientController extends Controller
{
    public function findAllClientByAdmin() {
        $client = Client::all();
        return view('admin.client.index',['client'=>$client]);
    }
    public function detailTreatment($id) {
        $detail_treatment = Client::find($id); // điều trị cho khách hàng và chi tiết.
        return view('admin.client.treatment',['detail_treatment'=>$detail_treatment]);
    }
    public function checkLogin() {
        return view('client.checkout.login_check');
    }
    public function handleRegisterAccount(Request $request) {
        $customer = new Customer;
        $customer -> customer_name = $request -> customer_name;
        $customer -> phone = $request -> phone;
        $customer -> email = $request -> email;
        $customer -> password = $request -> password;
        $customer -> save();
        $id_customer = $customer -> id;
        session()->put('customer_id',$id_customer);
        session()->put('customer_name',$request -> customer_name);
        return \redirect() -> route('client.checkout');
    }
    public function checkOut() {
        $city = City::all();
        $center = VNVCCenter::all();
        return view('client.checkout.check_out',['city'=>$city,'center'=>$center]);
    }
    public function logoutCheckOut() {
        session()->flush();
        return \redirect() -> route('client.login_checkout');
    }
    public function handleCheckOut(Request $request) {
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
        session()->put('id_client',$id_client);
        return \redirect() -> route('client.checkout');
    }
    public function handleLoginAccount(Request $request) {
        $email = $request -> email;
        $password = $request -> password;
        $result = Customer::where([['email','=',$email],['password','=',$password]])->first();
        if($result) {
            session()->put('customer_id',$result->id);
            return \redirect() -> route('client.checkout');
        }
        return \redirect() -> route('client.login_checkout');

    }

}
