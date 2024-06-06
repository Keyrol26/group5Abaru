<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentTimetable extends Model
{
    use HasFactory;
    public $table = 'student_timetables';

    protected $fillable = [
        'user_id',
        'day_id',
        'subject_id',
        'hall_id',
        'lecturer_group_id',
        'time_from',
        'time_to',
    ];

    
    
    // public function hall()
    // {
    //     return $this->belongsTo(Hall::class, 'hall_id');
    // }
    // public function subject()
    // {
    //     return $this->belongsTo(Subject::class);
    // }
    // public function day()
    // {
    //     return $this->belongsTo(Day::class);
    // }
    // public function class()
    // {
    //     return $this->belongsTo(LecturerGroup::class, 'lecturer_group_id');
    // }


    // public function user()
    // {
    //     return $this->belongsTo(User::class, 'user_id');
    // }


}
