<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Package;
use App\Models\TypePackage;
use App\Models\Vaccine;

class HomeController extends Controller
{
    public function index() {
        $type_package = TypePackage::all('id','name');
        $pacakge = Package::all('id','name','price');
        $vaccine = Vaccine::all('id','name','price_out');
        return view('client.layout',['type_package'=>$type_package,'package'=>$pacakge,'vaccine'=>$vaccine]);
    }
    public function home() {
        $type_package = TypePackage::all('id','name');
        $pacakge = Package::all('id','name','price','image');
        $vaccine = Vaccine::all('id','name','price_out','image');
        return view('client.home.home2',['type_package'=>$type_package,'package'=>$pacakge,'vaccine'=>$vaccine]);
    }

    public function indexHome() {
        $pacakge = Package::all('id','name','image');
        $vaccine = Vaccine::all('id','name','image');
        return view('client.home.index',['package'=>$pacakge,'vaccine'=>$vaccine]);
    }
}
