<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use App\Models\RegistrationInjection;
use App\Models\Client;
use App\Models\Vaccine;
use App\Models\Package;
use App\Models\City;
use App\Models\VNVCCenter;
use App\Models\Guardian;
use App\Models\DetailGuardian;

class RegistrationInjectionController extends Controller
{

    public function registration_injection() {
        $city = City::all();
        $group = VNVCCenter::all('id','name');
        $vaccine = Vaccine::all('id','name');
        $package = Package::all('id','name');
        return view('client.home.registration',['city'=>$city,'group'=>$group,'vaccine'=>$vaccine,'package'=>$package]);
    }
    public function handleRegistration(Request $request) {
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
        $guardian = new Guardian;
        $guardian -> name = $request -> name_guardian;
        $guardian -> phone = $request -> phone_guardian;
        $guardian ->save();
        $id_guardian = $guardian ->id;
        $detail_guardian = new DetailGuardian;
        $detail_guardian -> id_client = $id_client;
        $detail_guardian -> id_guardian = $id_guardian;
        $detail_guardian -> relationship = $request -> relationship;
        $detail_guardian -> save();
        $registration = new RegistrationInjection;
        $registration -> id_client = $id_client;
        $registration -> id_center = $request -> center;
        $registration -> id_vaccine = $request -> selectList;
        $registration -> id_package = $request -> selectList;
        $registration -> registration_date = $request -> registration_date;
        if($registration ->save() == null) {
            return \redirect() -> route('client.registration_injection');
        }
        return \redirect() -> route('client.home_index');
    }
    public function findAll() {
        $registration = RegistrationInjection::join('clients','clients.id','=','registration_injection.id_client')
                    ->join('detail_guardian','detail_guardian.id_client','=','clients.id')
                    ->join('guardians','guardians.id','=','detail_guardian.id_guardian')
                    ->join('vnvc_centers','vnvc_centers.id','=','registration_injection.id_center')
                    ->get(['clients.name as client_name','vnvc_centers.name as center_name','registration_injection.registration_date','guardians.name as guardian_name','guardians.phone as guardian_phone']);
        return view('admin.client.book',['registration'=>$registration]);
    }
    public function payRegistration() {
        return view('client.cart.pay_regis');
    }
    public function handlePayRegisTration(Request $request) {
        return \redirect() -> route('client.cart');
    }
}
