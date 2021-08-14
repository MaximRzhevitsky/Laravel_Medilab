<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Doctor extends Model
{

	protected $fillable = ['id','name','sur_name','last_name','specific','room','phone','image','department_id','email','photo'];

    public function department()
    {
        return $this->belongsTo(Department::class);
    }


    public function users()
    {
        return $this->belongsToMany(User::class,'records','doctor_id','user_id');
    }

    public function records()
    {
        return $this->hasMany(Record::class);
    }


    public static function add($fields)
    {
        $doctor = new static;
        $doctor->fill($fields);
        $doctor->save();

        return $doctor;
    }


    public function edit($fields)
    {
        $this->fill($fields);
        $this->save();
    }


    public function remove()
    {
        $this->removeImage();
        $this->delete();
    }


    public function removeImage()
    {
        if($this->image != null)
        {
            Storage::delete('uploads/' . $this->image);
        }
    }


    public function uploadImage($image)
    {
        if($image == null) { return; }

        $this->removeImage();
        $filename = $this->generateRandomString(10) . '.' . $image->extension();
        $image->storeAs('uploads', $filename);
        $this->image = $filename;
        $this->save();
    }


    public function getImage()
    {
        if($this->image == null)
        {
            return '/public/images/admin/no-image.png';
        }
        return '/public/images/admin/doctors/' . $this->image;
    }


    public function setDepartment($id)
    {
        if ($id == null) {
            return;
        }
        $this->department_id = $id;
        $this->save();
    }


    public function getUser()
    {
        $users = $this->users->map->only(['sur_name','name','last_name'])->all();
        $testArray = array_map(function($patient)
        {
          return implode(' ', $patient);
        }, $users);

return (!$this->users->isEmpty()) ? implode(',',$testArray) : 'Нет пациентов';
    }


    public function getDoctor($id)
    {
        $doctor = Doctor::find($id)->only(['sur_name','name','last_name']);
        return implode(' ', $doctor);
    }


    public function getDepartmentTitle()
    {
        return ($this->department_id != null)
            ? $this->department->title
            : 'Нет отделения';
    }
}