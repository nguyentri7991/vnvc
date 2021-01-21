<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\VNVCCenter;

class CenterController extends Controller
{
    public function findAllCenterByAdmin() {
        $group = VNVCCenter::all();
        return view('admin.group.index',['group'=>$group]);
    }
    public function add() {
        $city = City::all();
        return view('admin.group.add',['city'=>$city]);
    }
    public function edit($id) {
        $group = VNVCCenter::find($id);
        $city = City::all();
        return view('admin.group.edit',['group'=>$group,'city'=>$city]);
    }
    public function delete($id) {
        $group = VNVCCenter::find($id);
        if($group -> delete()) {
            echo 'delete Success';
            return redirect('admin/group');
        }
    }
    public function handleInsert(Request $request) {
        $group = new VNVCCenter;
        $group-> name =$request-> name;
        $group-> id_ward = $request-> id_ward;
        $group-> street = $request-> address;
        if($group -> save()!= null) {
            echo 'Insert Success';
            return redirect('admin/group');
        }
    }
    public function handleUpdate(Request $request) {
        $id = $request ->id;
        $group = VNVCCenter::find($id);
        if($group != null) {
            $group-> name =$request-> name;
            $group-> id_ward = $request-> id_ward;
            $group-> street = $request-> address;
            if($group -> save()!= null) {
                echo 'Update Success';
                return redirect('admin/group');
            }
        }
    }
}
