<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Helpdesk;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Laravel\Sail\Console\PublishCommand;

class adminController extends Controller
{

    public function getTotalReport()
    {
        $totalReport = Helpdesk::count();
        $totalUsers = User::count();
        $todayDate = Carbon::now()->format('d-m-Y');
        $thisMonth = Carbon::now()->format('m');
        $todaysReport = Helpdesk::whereDate('created_at' , $todayDate)->count();
        $thisMonthReport = Helpdesk::whereMonth('created_at' , $thisMonth)->count();

        $id = request('id');

        $report=Helpdesk::query()
        ->where('id',$id)
        ->firstOrFail();

        return view('admin.admin');
    }

}
