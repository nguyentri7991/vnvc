<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shift;

class ShiftController extends Controller
{
    public function findAll() {
        $shift = Shift::all();
        return view('admin.shift.index',['shift'=>$shift]);
    }
    public function edit($id) {
        $shift = Shift::find($id);
        return view('admin.shift.edit',['shift'=>$shift]);
    }
    public function handleUpdate(Request $request) {
        $id = $request -> id;
        $shift = Shift::find($id);
        if($shift!= null) {
            $shift ->time_from = $request -> time_from;
            $shift ->time_to =$request ->time_to;
            if($shift ->save()!=null) {
                echo'Update Success';
                return redirect('admin/shift');
            }
        }
    }
}
