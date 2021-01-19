<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TypeVaccine;
use App\Models\TypePackage;
use App\Models\Supplier;
use App\Models\Vaccine;


class VaccineController extends Controller
{
    public function findAllType() {
        $type = TypeVaccine::all();
        return view('admin.vaccine.type_index',['type'=>$type]);
    }
    public function addType() {
        return view('admin.vaccine.type_add');
    }
    public function editType($id) {
        $type = TypeVaccine::find($id);
        return view('admin.vaccine.type_edit',['type'=>$type]);
    }

    public function deleteType($id) {
        $type = TypeVaccine::find($id);
        if($type ->delete()) {
            return \redirect() -> route('typevaccine.index');
        }
    }

    public function handleInsertTypeVaccine(Request $request) {
        $type = new TypeVaccine;
        $type -> name = $request -> name;
        if($type -> save() != null) {
            return \redirect() -> route('typevaccine.index');
        }
    }
    public function handleUpdateTypeVaccine(Request $request) {
        $id  = $request -> id;
        $type = TypeVaccine::find($id);
        if($type != null) {
            $type -> name = $request -> name;
            if($type -> save() != null) {
                return \redirect() -> route('typevaccine.index');
            }
        }
    }
    public function findAllVaccine() {
        $vaccine = Vaccine::all('id','image','id_type','id_supplier','name','source','price_in','price_out','date_of_manufacture','expiry_date','quantity');
        return view('admin.vaccine.index',['vaccine'=>$vaccine]);
    }
    public function addVaccine() {
        $type = TypeVaccine::all('id','name');
        $supplier = Supplier::all('id','symbol');
        return view('admin.vaccine.add',['type'=>$type,'supplier'=>$supplier]);
    }
    public function editVaccine($id) {
        $vaccine = Vaccine::find($id);
        $supplier = Supplier::all('id','symbol');
        if($vaccine == null) {
            return \redirect() -> route('vaccine.index');
        }
        return view('admin.vaccine.edit',['vaccine'=>$vaccine,'supplier'=>$supplier]);
    }
    public function deleteVaccine($id) {
        $vaccine = Vaccine::find($id);
        if($vaccine ->delete()) {
            return \redirect() -> route('vaccine.index');
        }
    }
    public function handleInsertVaccine(Request $request) {
        if($request->hasFile('image')) {
            $imageName =$request->image->getClientOriginalName();
            $request->image->move(public_path('images/vaccines'),$imageName);
            $path = 'images/vaccines/'.$imageName;
            $vaccine = new Vaccine;
            $vaccine -> id_supplier = $request -> supplier;
            $vaccine -> id_type = $request -> type;
            $vaccine -> image = $path;
            $vaccine -> name = $request -> name;
            $vaccine -> source = $request -> source;
            $vaccine -> price_in = $request -> price_in;
            $vaccine -> price_out = $request -> price_out;
            $vaccine -> form = $request -> form;
            $vaccine -> unit = $request -> unit;
            $vaccine -> uses = $request -> uses;
            $vaccine -> amount = $request -> amount;
            $vaccine -> usings = $request -> usings;
            $vaccine -> date_of_manufacture = $request -> date_of_manufacture;
            $vaccine -> expiry_date = $request -> expiry_date;
            $vaccine -> preservation = $request -> preservation;
            $vaccine -> packing_type = $request -> packing_type;
            if($vaccine -> save() != null) {
                return \redirect() -> route('vaccine.index');
            }
        } else {
            return \redirect() -> route('vaccine.add');
        }
    }
    public function handleUpdateVaccine(Request $request) {
        $id = $request -> id;
        $vaccine = Vaccine::find($id);
        if($vaccine == null) {
            return \redirect() -> route('vaccine.index');
        }
        $imageName =$request->image->getClientOriginalName();
        $request->image->move(public_path('images/vaccines'),$imageName);
        $path = 'images/vaccines/'.$imageName;
        $vaccine -> image = $path;
        $vaccine -> id_supplier = $request -> supplier;
        $vaccine -> name = $request -> name;
        $vaccine -> source = $request -> source;
        $vaccine -> price_in = $request -> price_in;
        $vaccine -> price_out = $request -> price_out;
        $vaccine -> form = $request -> form;
        $vaccine -> unit = $request -> unit;
        $vaccine -> uses = $request -> uses;
        $vaccine -> amount = $request -> amount;
        $vaccine -> usings = $request -> usings;
        $vaccine -> expiry_date = $request -> expiry_date;
        $vaccine -> preservation = $request -> preservation;
        $vaccine -> packing_type = $request -> packing_type;
        if($vaccine ->save() != null) {
            return \redirect() -> route('vaccine.index');
        }
    }
    // End Admin

    public function showVaccineHome() {
        $type_package = TypePackage::all('id','name');
        $vaccine = Vaccine::all('id','name','price_out','image');
        return view('client.vaccine.vaccine',['vaccine'=>$vaccine,'type_package'=>$type_package]);
    }
    public function showvaccineById($id) {
        $type_package = TypePackage::all('id','name');
        $vaccine = Vaccine::all('id','name');
        $vaccine_id = Vaccine::find($id);
        return view('client.vaccine.detail_vaccine',['vaccine_id'=>$vaccine_id,'vaccine'=>$vaccine,'type_package'=>$type_package]);
    }
}
