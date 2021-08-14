<?php

namespace App\Http\Controllers\Admin;

use App\Department;
use App\Doctor;
use App\Schedule;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DoctorsController extends Controller
{
    /**
     * Display a listing of the doctors.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $doctors = Doctor::all();
        return view('admin.doctors.index', ['doctors'=>$doctors]);

    }

    /**
     * Show the form for creating a new doctor.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departments = Department::pluck('title', 'id')->all();

        return view('admin.doctors.create', compact(
            'departments'));
    }

    /**
     * Store a newly created doctor in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' =>'required',
            'sur_name'   =>  'required',
            'last_name'  =>  'required',
            'phone' =>  'required',
            'email' =>  'required',
            'specific' =>  'required',
            'room' =>  'required',
            'image' =>  'nullable'
        ]);

        $doctor = Doctor::add($request->all());
        $doctor->setDepartment($request->get('department_id'));
        $doctor->uploadImage($request->file('image'));

        return redirect()->route('doctors.index');
    }

    /**
     * Show the form for editing the doctor.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $doctor = Doctor::find($id);
        $departments = Department::pluck('title', 'id')->all();

        return view('admin.doctors.edit', compact(
            'departments','doctor'));

    }

    /**
     * Update the doctor in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' =>'required',
            'sur_name'   =>  'required',
            'last_name'  =>  'required',
        ]);

        $doctor = Doctor::find($id);
        $doctor->edit($request->all());
        $doctor->uploadImage($request['image']);
        
        return redirect()->route('doctors.index');

    }

    /**
     * Remove the doctor from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $doctor = Doctor::find($id);
        $doctor->remove();
        return redirect()->route('doctors.index');
    }
}
