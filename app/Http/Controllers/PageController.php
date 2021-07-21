<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Doctor;
use App\Department;
use App\Role;
use App\User;

class PageController extends Controller
{

    /**
     * Display a main page.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

  return view('pages.index');
    }


    /**
     * Display a page - about.
     *
     * @return \Illuminate\Http\Response
     */
    public function about()
    {
      $doctors=Doctor::all();
        return view('pages.about',['doctor'=>$doctors]);
    }


    /**
     * Display a page - services.
     *
     * @return \Illuminate\Http\Response
     */
    public function services()
    {
        $departments=Department::all();
        return view('pages.services',['department'=>$departments]);
    }


    /**
     * Send a message by ajax.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function ajax(Request $request)
    {
        $name=$_GET['name'];
        $email=$_GET['email'];
        $subject=$_GET['subject'];
        $message=$_GET['message'];

        $headers="From: $email\r\nReply-to: $name\r\nContent-type: text/html; charset=utf-8\r\n";

        $success=mail("max@gmail.com",$subject,$message,$headers);
        echo $success;

    }








}
