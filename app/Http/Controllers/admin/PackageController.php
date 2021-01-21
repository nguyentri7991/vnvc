<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TypePackage;
use App\Models\Package;
use App\Models\Prevention;
use App\Models\Vaccine;
use App\Models\DetailPackageVaccine;

class PackageController extends Controller
{
    public function findAllTypePackageByAdmin() {
        $type = TypePackage::all();
        return view('admin.package.type_index',['type'=>$type]);
    }
    public function addType() {
        return view('admin.package.type_add');
    }
    public function editType($id) {
        $type = TypePackage::find($id);
        if($type != null) {
            return view('admin.package.type_edit',['type'=>$type]);
        }
    }
    public function deleteType($id) {
        $type = TypePackage::find($id);
        if($type->delete()) {
            return \redirect() -> route('typepackage.index');
        }
    }
    public function handleInsertType(Request $request) {
        $type = new TypePackage;
        $type -> name = $request -> name;
        if($type -> save() != null) {
            return \redirect() -> route('typepackage.index');
        }
    }
    public function handleUpdateType(Request $request) {
        $id = $request -> id;
        if($id == null) {
            return \redirect() -> route('typepackage.index');
        }
        $type = TypePackage::find($id);
        $type -> name = $request -> name;
        if($type -> save() != null) {
            return \redirect() -> route('typepackage.index');
        }
    }

    public function findAllPackageByAdmin() {
        $package = Package::all('id','id_type','name','quantity_vaccine','price','saleOff','image');
        return view('admin.package.index',['package'=>$package]);
    }
    public function detailPackage($id) {
        $detail_package = DetailPackageVaccine::where('id_package',$id)->get();
        return view('admin.package.detail',\compact('detail_package'));
    }
    public function addPackage() {
        $type = TypePackage::all();
        $vaccine = Vaccine::all();
        $prevention = Prevention::all();
        return view('admin.package.add',['type'=>$type,'vaccine'=>$vaccine,'prevention'=>$prevention]);
    }
    public function editPackage($id) {
        $package = Package::find($id);
        if($package == null) {
            return \redirect() -> route('package.index');
        }
        $type = TypePackage::all();
        $vaccine = Vaccine::all();
        $prevention = Prevention::all();
        return view('admin.package.edit',['type'=>$type,'package'=>$package,'vaccine'=>$vaccine,'prevention'=>$prevention]);
    }
    public function deletePackage($id) {
        $package = Package::find($id);
        if($package ->delete()) {
            return \redirect() -> route('package.index');
        }
    }
    public function handleInsertPackage(Request $request) {
        $imageName =$request->image->getClientOriginalName();
        $request->image->move(public_path('images/packages'),$imageName);
        $path = 'images/packages/'.$imageName;
        $package = new Package;
        $package -> id_type = $request->type;
        $package -> image = $path;
        $package -> name = $request->name;
        $package -> quantity_vaccine = $request->quantity_vaccine;
        $package -> price = $request->price;
        $package -> saleOff = $request->saleOff;
        $package -> note = $request->note;
        $package->save();
        $id_package = $package ->id;
        for($i=0;$i<count($request -> prevention);$i++){
            $detail_package = new DetailPackageVaccine;
            $detail_package -> id_package = $id_package;
            $detail_package -> id_prevention =  $request -> prevention[$i];
            $detail_package -> id_vaccine = $request -> vaccine[$i];
            $detail_package-> number_of_doses = $request -> number_of_doses[$i];
            $detail_package->save();
        }
        return \redirect() -> route('package.index');
    }
    public function handleUpdatePackage(Request $request) {
        $id = $request -> id;
        if($id == null) {
            return \redirect() -> route('package.index');
        }
        $imageName =$request->image->getClientOriginalName();
        $request->image->move(public_path('images/packages'),$imageName);
        $path = 'images/packages/'.$imageName;
        $package = Package::find($id);
        $package -> id_type = $request->type;
        $package -> image = $path;
        $package -> name = $request->name;
        $package -> quantity_vaccine = $request->quantity_vaccine;
        $package -> price = $request->price;
        $package -> saleOff = $request->saleOff;
        $package -> note = $request->note;
        return \redirect() -> route('package.index');
    }
    //End Function Admin Page

    public function showPackageHome($id_type) {
        $type_package = TypePackage::all('id','name');
        $vaccine = Vaccine::all('id','name');
        $package = Package::join('type_packages','type_packages.id','=','packages.id_type')->where('id_type',$id_type)
                ->get(['packages.id','packages.name as package_name','packages.price as package_price','packages.image']);
        return view('client.package.package',['package'=>$package,'vaccine'=>$vaccine,'type_package'=>$type_package]);
    }
    public function showPackageById($id) {
        $type_package = TypePackage::all('id','name');
        $vaccine = Vaccine::all('id','name');
        $package = Package::find($id);
        return view('client.package.detail_package',['package'=>$package,'vaccine'=>$vaccine,'type_package'=>$type_package]);
    }
}
