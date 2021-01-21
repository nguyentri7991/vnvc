<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\Customer;
use App\Models\City;
use App\Models\VNVCCenter;
use App\Models\InjectionSchedules;
use App\Models\DetailInjectionSchedules;

class SearchController extends Controller
{
    public function searchIndex() {
        return view('client.home.search');
    }
    public function handleSearchInjectionForClient(Request $request) {
        $name_client = $request -> name_client;
        $vaccination_code = $request -> vaccination_code;
        $date_start = $request -> date_start;
        $date_end = $request -> date_end;
        $result = DetailInjectionSchedules::join('injection_schedules','injection_schedules.id','=','detail_injection_schedules.id_injection_schedules')
                ->join('clients','clients.id','=','injection_schedules.id_client')
                ->join('vnvc_centers','vnvc_centers.id','=','injection_schedules.id_center')
                ->join('rooms','rooms.id','=','injection_schedules.id_room')
                ->join('vaccines','vaccines.id','=','detail_injection_schedules.id_vaccine')
                ->join('employees','employees.id','=','detail_injection_schedules.id_employee')
                ->where('clients.name','like','%'.$name_client.'%')
                ->where('clients.vaccination_code',$vaccination_code)
                ->whereBetween('detail_injection_schedules.date_of_injection',[$date_start,$date_end])
                ->get(['vnvc_centers.name as name_center','clients.name as name_client','employees.name as name_employee','rooms.name as name_room','vaccines.name as name_vaccine','detail_injection_schedules.date_of_injection','detail_injection_schedules.amount_of_injection','detail_injection_schedules.the_day_of_the_next_injection']);
                return view('client.home.result_search',['result_search'=>$result]);
    }
    //Tìm kiêm trung tâm

    //Quên mật khẩu
    //Tìm kiếm vaccine
    //Tìm kiếm gói tiêm
}
