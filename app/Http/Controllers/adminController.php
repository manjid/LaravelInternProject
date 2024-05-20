<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Helpdesk;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Laravel\Sail\Console\PublishCommand;

class adminController extends Controller
{

    public function list()
    {
        $totalReport = Helpdesk::all()->count();
        $totalUsers = User::all()->count();
        $todayDate = Carbon::now()->format('d-m-Y');
        $thisMonth = Carbon::now()->format('m');
        $todaysReport = Helpdesk::whereDate('created_at' , $todayDate)->count();
        $thisMonthReport = Helpdesk::whereMonth('created_at' , $thisMonth)->count();


        return view('admin.admin', compact('totalReport','totalUsers','todaysReport','thisMonthReport'));
    }

}
