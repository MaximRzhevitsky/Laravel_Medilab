<?php

namespace App\Http\Controllers\Admin;

use App\User;
use App\Doctor;
use App\Record;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Gate;

class RecordAdminController extends Controller
{
    /**
     * Display a listing of the record.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $records = Record::all();
        return view('admin.records.index', compact('records'  ));
    }

    /**
     * Store a newly created record in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
 public function store(Request $request)
{
    if(Gate::denies('update-record')){
        return redirect()->back()->with(['message'=>'У Вас нет прав на эту операцию']);
    }
    Record::add($request->all());
    return Redirect::back();
    }

    /**
     * Show the form for editing the record.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $record = Record::find($id);
        $doctor=Doctor::find($record->doctor_id)->getDoctor($record->doctor_id);
        $user=User::find($record->user_id)->getUser($record->user_id);

        return view('admin.records.edit', compact(
            'doctor', 'user','record'));
    }


    /**
     * Remove the record from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       Record::find($id)->delete();
        return Redirect::back();
    }
}
