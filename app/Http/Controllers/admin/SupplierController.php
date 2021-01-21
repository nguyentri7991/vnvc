<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Supplier;

class SupplierController extends Controller
{
    public function findAllSupplierByAdmin() {
        $supplier = Supplier::all();
        return view('admin.supplier.index',['supplier'=>$supplier]);
    }
    public function add() {
        return view('admin.supplier.add');
    }
    public function edit($id) {
        $supplier = Supplier::find($id);
        return view('admin.supplier.edit',['supplier'=>$supplier]);
    }
    public function delete($id) {
        $supplier = Supplier::find($id);
        if($supplier -> delete()) {
            echo 'supplier Success';
            return \redirect() -> route('supplier.index');
        }
    }
    public function handleInsert(Request $request) {
        $supplier = new Supplier;
        $supplier -> symbol = $request -> symbol;
        $supplier -> name = $request -> name;
        $supplier -> phone = $request -> phone;
        $supplier -> email = $request -> email;
        $supplier -> address = $request -> address;
        if($supplier -> save()!=null) {
            return \redirect() -> route('supplier.index');
        }
    }
    public function handleUpdate(Request $request) {
        $id = $request -> id;
        $supplier = Supplier::find($id);
        if($supplier != null) {
            $supplier -> symbol = $request -> symbol;
            $supplier -> name = $request -> name;
            $supplier -> phone = $request -> phone;
            $supplier -> email = $request -> email;
            $supplier -> address = $request -> address;
            if($supplier -> save()!=null) {
                return \redirect() -> route('supplier.index');
            }
        }
    }
}
