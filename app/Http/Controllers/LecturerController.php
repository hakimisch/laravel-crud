<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lecturer; 

class LecturerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lecturers = Lecturer::all();
        return view ('lecturers.index')->with('lecturers', $lecturers);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('lecturers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all();
        Lecturer::create($input);
        return redirect('lecturer')->with('flash_message', 'Lecturer Added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $lecturer = Lecturer::find($id);
        return view('lecturers.show')->with('lecturers', $lecturer);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $lecturer = Lecturer::find($id);
        return view('lecturers.edit')->with('lecturers', $lecturer);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $lecturer = Lecturer::find($id);
        $input = $request->all();
        $lecturer->update($input);
        return redirect('lecturer')->with('flash_message', 'lecturer Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Lecturer::destroy($id);
        return redirect('lecturer')->with('flash_message', 'Lecturer deleted!');
    }
}
