<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
      protected $fillable = ['id','doctor_id','user_id','dateTime'];

           public function getUser($id)
           {
               $patient = User::find($id)->only(['sur_name','name','last_name']);
           return implode(' ', $patient);
           }


    public function getDoctor($id)
    {
        $doctor = Doctor::find($id)->only(['sur_name','name','last_name']);
        return implode(' ', $doctor);
    }


    public function getIdRecord(){
        return $this->id;
    }


    public function edit($fields)
    {
        $this->fill($fields);
        $this->save();
    }


//    public static function add($fields,$id)
//    {
//
//        $record = new static;
//        $record->fill($fields);
//        $record->save();
//        return $record;
//    }




}