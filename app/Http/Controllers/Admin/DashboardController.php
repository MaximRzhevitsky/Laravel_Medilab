<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    /**
     * Display dashboard panel.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view('admin.dashboard');
    }
}
