<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\cources;

class student extends Model
{
    use HasFactory;
    public function bringCource(){
        return $this->belongsToMany(Cources::class);
    }
}
