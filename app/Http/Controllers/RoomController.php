<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;
use App\Models\VNVCCenter;
use App\Models\Employee;
use App\Models\RoomCenter;
use App\Models\DetailRoomCenter;

class RoomController extends Controller
{
    public function findAll() {
        $detail_room = RoomCenter::all();
        return view('admin.room.index',['detail'=>$detail_room]);
    }
    public function add() {
        $room = Room::all('id','name');
        $employee = Employee::all('id','name');
        $group = VNVCCenter::all('id','name');
        return view('admin.room.add',['room'=>$room,'employee'=>$employee,'group'=>$group]);
    }
    public function edit($id) {
        $edit = RoomCenter::find($id);
        $employee = Employee::all('id','name');
        return view('admin.room.edit',['edit'=>$edit,'employee'=>$employee]);
    }
    public function detail($id) {
        $detail_room_employee = DetailRoomCenter::where('id_detail','=',$id) ->get();
        return view('admin.room.detail',['detail_room'=>$detail_room_employee]);
    }
    public function handleInsert(Request $request) {
        $room_center = new RoomCenter;
        $room_center -> id_center = $request -> center;
        $room_center -> id_room = $request -> room;
        $room_center -> id_employee = $request -> employee;
        if($room_center -> save() != null) {
            echo 'Thêm Mới Thành Công';
            return redirect()->route('room.index');
        }
    }
    public function handleUpdate(Request $request) {
        $id = $request -> id;
        $room_center = RoomCenter::find($id);
        if($room_center != null) {
            $room_center-> id_employee = $request -> employee;
            if($room_center ->save() != null) {
                echo 'Thêm Mới Thành Công';
                return redirect()->route('room.index');
            }
         }
    }
}
