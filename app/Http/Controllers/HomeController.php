<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $usertype = Auth::user()->usertype;

            $views = [
                'user' => 'dashboard',
                'admin' => 'admin.admin',
            ];

            if (isset($views[$usertype]))
            {
                return view($views[$usertype]);
            }
                return redirect()->back();

    }
}
