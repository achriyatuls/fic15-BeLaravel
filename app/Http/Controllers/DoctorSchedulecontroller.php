<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Doctor;

class DoctorSchedulecontroller extends Controller
{
    public function index(Request $request)
{
    $doctorSchedules = DoctorSchedule::with('doctor')
    ->when($request->input('doctor_id'), function($query,$doctor_id){
        return $query->where('doctor_id',$doctor_id);
    })
    ->orderBy('id','desc')
    ->load('doctor')
    ->paginate(10);
    return view('pages.doctor_schedules.index', compact('doctorSchedules'));
}

}

