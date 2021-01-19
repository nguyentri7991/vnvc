<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Position;
use App\Models\VNVCCenter;
use App\Models\Level;
use App\Models\City;

class EmployeeController extends Controller
{
    public function findAll() {
        $employee = Employee::all();
        return view('admin.employee.index',['employee'=>$employee]);
    }
    public function add() {
        $position = Position:: all();
        $group = VNVCCenter::all();
        $level = Level::all();
        $city = City::all();
        return view('admin/employee/add',['position'=>$position,'group'=>$group,'level'=>$level,'city'=>$city]);
    }
    public function profile($id) {
        $employee_profile = Employee::find($id);
        $position = Position:: all();
        $group = VNVCCenter::all();
        $city = City::all();
        return view('admin/employee/profile',["employee"=>$employee_profile,'position'=>$position,'group'=>$group,'city'=>$city]);
    }
    public function edit($id) {
        $employee_update = Employee::find($id);
        $position = Position:: all();
        $group = VNVCCenter::all();
        $level = Level::all();
        $city = City::all();
        return view('admin/employee/edit',["employee"=>$employee_update,'position'=>$position,'group'=>$group,'level'=>$level,'city'=>$city]);
    }
    public function delete($id) {
        $employee_delete = Employee::find($id);
        if($employee_delete -> delete()) {
            echo 'delete Success';
            return redirect('admin/employee');
        }
    }
    public function handleInsert(Request $request) {
        //Kiểm tra xem username đã tồn tại chưa
        $input_account = $request->username;
        $check_username = Employee::where('username',$input_account)->first();
        if($check_username == null) {
            //Lưu hình ảnh
            $imageName =$request->image->getClientOriginalName();
            $request->image->move(public_path('images/avatars'),$imageName);
            $path = 'images/avatars/'.$imageName;
            $employee_new = new Employee;
            $employee_new -> username = $request -> username;
            $employee_new -> password = $request -> password;
            $employee_new -> name = $request -> name;
            $employee_new -> date_of_birth = $request -> date_of_birth;
            $employee_new -> cmnd = $request -> cmnd;
            $employee_new -> gender = $request -> gender;
            $employee_new -> avatar = $path;
            $employee_new -> phone = $request -> phone;
            $employee_new -> email = $request -> email;
            $employee_new -> id_ward = $request -> id_ward;
            $employee_new -> street = $request -> address;
            $employee_new -> id_level = $request -> level;
            $employee_new -> id_position = $request -> position;
            $employee_new -> status = $request -> status;
            $employee_new -> id_center = $request -> center;
            if($employee_new -> save()!= null) {
                echo 'Thêm Mới Thành Công';
                alert()->success('Thông Báo', 'Thêm Thành Công');
                return redirect()->route('employee.index');
            }
        }
        else {
            echo 'Thêm Mới Thất Bại';
            return redirect()->route('employee.add');
        }
    }
    public function handleUpdate(Request $request) {
        $imageName =$request->image->getClientOriginalName();
        $request->image->move(public_path('images/avatars'),$imageName);
        $path = 'images/avatars/'.$imageName;
        $id = $request-> id;
        $employee_update = Employee::find($id);
        if($employee_update != null) {
            $employee_update -> name = $request -> name;
            $employee_update -> date_of_birth = $request -> date_of_birth;
            $employee_update -> cmnd = $request -> cmnd;
            $employee_update -> email = $request -> email;
            $employee_update -> phone = $request -> phone;
            $employee_update -> avatar = $path;
            $employee_update -> street = $request -> street;
            $employee_update -> id_ward = $request -> id_ward;
            $employee_update -> gender = $request -> gender;
            $employee_update -> id_level = $request -> level;
            $employee_update -> id_position = $request -> position;
            $employee_update -> status = $request -> status;
            $employee_update -> id_center = $request -> center;
            if($employee_update -> save()!= null) {
                echo 'Update Success';
                return redirect()->route('employee.index');
            }
        } else {
            echo 'Update Fail';
            return redirect() -> route('employe.edit');
        }
    }

}
