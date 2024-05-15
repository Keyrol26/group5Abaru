<?php

namespace App\Http\Controllers;

use App\Models\LecturerGroup;
use Illuminate\Http\Request;

class LecturerGroupController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lecgroups = LecturerGroup::all();
        // dd($lecgroups);
        return view('lecgp.index',compact('lecgroups'));
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
    public function show(LecturerGroup $lecturerGroup)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(LecturerGroup $lecturerGroup)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, LecturerGroup $lecturerGroup)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(LecturerGroup $lecturerGroup)
    {
        //
    }
}
