<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\City;
use App\Models\District;
use App\Models\Ward;

class LocalController extends Controller
{
    public function findCity(){
        $city = City::all();
        return view('admin.group.add',['city'=>$city]);
    }
    public function findDistrict(Request $req){
        $id =$req->id;
        $data = District::select('name','id')->where('id_city','=',$id)->take(100)->get();
        return \response() -> json($data);
    }
    public function findWard(Request $req){
        $data1 = Ward::where('id_district',$req->id)->get();
        return \response()->json($data1);
    }
}
