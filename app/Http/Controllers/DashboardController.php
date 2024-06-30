<?php

namespace App\Http\Controllers;

class DashboardController extends Controller
{
    public function admindashboard()
    {
        return view('pages.dashboard.admin.home');
    }

    public function userdashboard()
    {
        return view('pages.dashboard.users.home');
    }
}
