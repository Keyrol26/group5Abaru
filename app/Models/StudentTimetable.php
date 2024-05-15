<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentTimetable extends Model
{
    use HasFactory;
    public $table = 'student_timetables';

    protected $fillable = [
    ];
}
