<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory; 
class Student extends Model
{
    use HasFactory;

    
    protected $fillable = ['name', 'classrooms_id', 'gender'];

    public function classroom()
    {
        return $this->belongsTo(Classroom::class, 'classrooms_id');
    }
}

