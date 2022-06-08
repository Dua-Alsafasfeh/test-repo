<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\student;

class cources extends Model
{
    use HasFactory;
    public function bringStudent(){
        return $this->belongsToMany(Student::class);
    }
}
