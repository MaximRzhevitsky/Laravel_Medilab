<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected $fillable = ['hours'];

    public function doctor()
    {
        return $this->hasMany(Doctor::class,'schedule_id','id');
    }


    public function edit($fields)
    {
        $this->schedule()->fill($fields);
        $this->save();
    }

}
