<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Fund;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function dashboard()

    {
        $today = Fund::where('created_at','>=',Carbon::now())->get(['amount','created_at'])->sum("amount");
        $yesterday = Fund::where('created_at','>=',Carbon::now()->subdays(1))->get(['amount','created_at'])->sum("amount");;
        $last_weak = Fund::where('created_at','>=',Carbon::now()->subdays(7))->get(['amount','created_at'])->sum("amount");
        $this_month = Fund::where('created_at','>=',Carbon::now()->subMonth())->get(['amount','created_at'])->sum("amount");
        $last_15_days = Fund::where('created_at','>=',Carbon::now()->subdays(15))->get(['amount','created_at'])->sum("amount");
        $last_year = Fund::where('created_at',date('Y', strtotime('-1 year')))->get(['amount','created_at'])->sum("amount");

        return view('Admin.Dashboard.dashboard',
            ["today" => $today,
            "yesterday" => $yesterday,
            "last_weak" => $last_weak,
            "this_month" => $this_month,
            "last_year" => $last_year],
        );
    }
}
