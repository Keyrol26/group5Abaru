<?php

namespace App\Http\Controllers;

use App\Models\LecturerGroup;
use App\Models\Subject;
use App\Models\Day;
use App\Models\Hall;
use App\Models\StudentTimetable;
use Illuminate\Http\Request;

class StudentTimetableController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $timetables = StudentTimetable::with('day', 'subject', 'hall', 'class')
        ->get();
        // $timetables = StudentTimetable::all();
        // dd($timetables);    
        return view('timetables.index', compact('timetables'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $days = Day::pluck('day_name', 'id');

        $halls = Hall::pluck('lecture_hall_name', 'id');

        $subjects = Subject::pluck('subject_name', 'id', 'subject_code');

        $lec_gp = LecturerGroup::pluck('name', 'id');

        return view('timetables.create', compact('days', 'subjects', 'halls', 'lec_gp'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        StudentTimetable::create([
            'user_id' => auth()->user()->id,
            'day_id' => $request->day_id,
            'subject_id' => $request->subject_id,
            'hall_id' => $request->lecture_hall_id,
            'lecturer_group_id' => $request->class,
            'time_from' => $request->time_from,
            'time_to' => $request->time_to,
        ]);
        return redirect()->route('timetables.index')
            ->with('success', 'Timetables created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $timetables = StudentTimetable::with('day', 'subject', 'hall', 'class')->find($id);
        // dd($timetables);
        return view('timetables.show', compact('timetables'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(StudentTimetable $timetable)
    {
        $days = Day::pluck('day_name', 'id');
        $halls = Hall::pluck('lecture_hall_name', 'id');
        $subjects = Subject::pluck('subject_name', 'id'); // Removed extra 'subject_code'
        $lec_gp = LecturerGroup::pluck('name', 'id');

        return view('timetables.edit', compact('days', 'subjects', 'halls', 'lec_gp', 'timetable'));

    }


    /**
     * Update the specified resource in storage.
     */

    // $timetable->where('id', $request->timetable)->update([
    //     'user_id' => auth()->user()->id,
    //     'day_id' => $request->day_id,
    //     'subject_id' => $request->subject_id,
    //     'hall_id' => $request->lecture_hall_id,
    //     // 'lecturer_group_id' => $request->class_id,
    //     'time_from' => $request->time_from,
    //     'time_to' => $request->time_to,
    // ]);

    public function update(Request $request, StudentTimetable $timetable)
    {
       
        $timetable->update($request->all());

        return redirect()->route('timetables.index')
            ->with('success', 'Timetables updated successfully');
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        $timetables = StudentTimetable::find($id);
        $timetables->delete();

        return redirect()->route('timetables.index')
            ->with('success', 'Timetabe deleted successfully');
    }

}
