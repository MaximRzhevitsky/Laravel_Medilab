<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Str;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
       'id', 'name','sur_name','last_name','phone','password', 'email'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function doctors()
    {
        return $this->belongsToMany(Doctor::class,'records','user_id','doctor_id')->withPivot('id');
    }

    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    public static function add($fields)
    {
        $user = new static;
        $user->fill($fields);
        $user->save();
        return $user;
    }

    public function edit($fields)
    {
        $this->fill($fields); //name,email
        $this->save();
    }

    public function generatePassword($password)
    {
        if($password != null)
        {
            $this->password = bcrypt($password);
            $this->save();
        }
    }

    public function remove()
    {
        $this->removeAvatar();
        $this->delete();
    }

    public function uploadAvatar($views)
    {
        if($views == null) { return; }
        $this->removeAvatar();
        $filename =  Str::random(10) . '.' . $views->extension();
        $views->storeAs('uploads', $filename);
        $this->views = $filename;
        $this->save();
    }

    public function removeAvatar()
    {
        if($this->views != null)
        {
            Storage::delete('uploads/' . $this->views);
        }
    }


    public function getImage()
    {
        if($this->image == null)
        {
            return '/public/images/admin/no-image.png';
        }
        return '/public/images/admin/' . $this->image;
    }


    public function getDoctor($id_doctor)
    {
        $doctor = Doctor::find($id_doctor)->only(['sur_name', 'name', 'last_name']);
        return implode(' ', $doctor);
    }

    public function getUser($id)
    {
        $user = User::find($id)->only(['sur_name','name','last_name']);
        return implode(' ', $user);
    }


    public function getIdRecord(){
        return $this->pivot->id;
    }

//    public function setUser($id)
//    {
//        if ($id == null) {
//            return;
//        }
//        $this->user_id = $id;
//        $this->save();
//    }


//    public function setDoctor($id)
//    {
//        if ($id == null) {
//            return;
//        }
//        $this->doctor_id = $id;
//        $this->save();
//    }

}
