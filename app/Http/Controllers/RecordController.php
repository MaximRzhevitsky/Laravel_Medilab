<?php

namespace App\Http\Controllers;

use App\User;
use App\Doctor;
use App\Record;
use Illuminate\Http\Request;

class RecordController extends Controller
{
    /**
     * Display a listing of the records.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('pages.records', ['users'   =>  $users]);
    }


    /**
     * Created a new record.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function record(Request $request)
    {
      //  $doctors=Doctor::all();
        $user = $request->user();
     //   $records=Record::all()->where('user_id',$user->id);

          $doc = Doctor::get(['id','sur_name','name', 'last_name'])->toArray();
           $doctors = array_map(function($vrach) {
              return implode(' ', $vrach);
            }, $doc);

          $records=Record::all()->where('user_id',$user->id);

        return view('pages.record', compact('doctors','user','records'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::find($id);

        $dateTime=$request->get('dateTime');
        $id_doctor =  ($request->get('doctor_id')) +1;

        $doctor=Doctor::find($id_doctor);

        $user->doctors()->attach($id_doctor,['dateTime'=>$dateTime]);

$record=Record::where('user_id',$id)->orderby('id', 'desc')->first();
$id_record=$record->id;

      //--Sending mail----\\

        $subject = 'Запись ко врачу';
        $to = $user->email;
        $from = 'medilab@gmail.com';
        $message = 'Вы записались к  '.$user->getDoctor($id_doctor).', дата приема - '.$dateTime.',номер приема - '.$id_record;
        $headers  = "Content-type: text/html; charset=utf-8 \r\n";
        $headers .= "From: <$from>\r\n";
        if (mail($to, $subject, $message, $headers)){
            return view('pages/mail',compact('user','doctor','dateTime','id_doctor','id_record'));
        }
        echo 'Запись не удалась, извините';
    }

    /**
     * Remove the record from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_record)
    {
       Record::find($id_record)->delete();

        return redirect()->route('record');
    }
}
