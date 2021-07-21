<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $fillable = ['title'];

    public function doctors()
    {
        return $this->hasMany(Doctor::class);
    }
}
