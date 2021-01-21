<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Employee;
class AuthController extends Controller
{
    public function checkLogin() {
        $user = null;
    }
    public function index() {
        return view('admin.auth.login');
    }
    public function dashboard() {
        return view('admin.auth.dashboard');
    }
    public function authLogin(Request $request) {
        $username = $request -> username;
        $password = $request -> password;
        $result = Employee::where([['username','=',$username],['password','=',$password]]);
        if($request) {
            $request->session() ->put('employee',$result['name']);
            return \redirect() -> route('admin.dashboard');
        }
        return \redirect() -> route('admin.login');
    }
    public function authLogout() {
        if(session()->has('employee')){
            session()->pull('employee');
            return view('admin.auth.login');
        }
    }
}
