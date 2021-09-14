<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index()
    {
        if (Auth::user()->hasRole('admin')) {
            return view('dashboard.index');
        }elseif (Auth::user()->hasRole('user')) {
            return view('main.index');
        }else{
            return view('/');

        }
    }

    public function profile()
    {
        return view('dashboard.profile');

    }
}