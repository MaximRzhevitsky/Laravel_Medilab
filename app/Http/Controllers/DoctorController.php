<?php

namespace App\Http\Controllers;


class DoctorController extends Controller
{

    /**
     * Display a listing of the doctors.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('doctor');
    }
}
