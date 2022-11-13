<?php

namespace App\Http\Controllers;

use Carbon\Carbon;

class TimeController extends Controller
{
    public function index(){
        $dt = Carbon::now();
        $times = [
            "Year" => $dt->year,
            "Month" => $dt->month,
            "Day" => $dt->day,
            "Hour" => $dt->hour,
            "Minute" => $dt->minute,
        ];

    return view('time', ['times' => $times]);
    }
}
