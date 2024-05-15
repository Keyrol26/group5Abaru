<?php

namespace App\Http\Controllers;

use App\Models\StudentTimetable;
use Illuminate\Http\Request;

class StudentTimetableController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $timetables = StudentTimetable::all();
        // dd($timetables);
        return view('timetables.index',compact('timetables'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(StudentTimetable $studentTimetable)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(StudentTimetable $studentTimetable)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, StudentTimetable $studentTimetable)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(StudentTimetable $studentTimetable)
    {
        //
    }
}
