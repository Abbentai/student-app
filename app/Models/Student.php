<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = ["name", "email", "phone", "dob", "college_id"];


    //Referencing from college_id
    //Student belongs to 1 College
    public function college(){ 
        return $this->belongsTo(College::class);
    }
}
