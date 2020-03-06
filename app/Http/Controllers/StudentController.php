<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $students = Student::all();

        return view('students.dashboard', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'gender' => 'required',
            'country' => 'required',
            'address' => 'required'
        ]);

        Student::create($request->all());

        return redirect()->route('students.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    // public function show(Student $student)
    public function show($id)
    {
        //
        $students = Student::findOrfail($id);

        return view('students.show', compact('students'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    // public function edit(Student $student)
    public function edit($id)
    {
        //
        $students = Student::findOrfail($id);

        return view('students.edit', compact('students'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, Student $student)
     public function update(Request $request, $id)
    {
        //
        $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'gender' => 'required',
            'country' => 'required',
            'address' => 'required'
        ]);

        $student = array (
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'gender' => $request->gender,
            'country' => $request->country,
            'address' => $request->address,
        );

        Student::whereId($id)->update($student);
        return redirect()->route('students.index')->with('success', 'Student Update Successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    // public function destroy(Student $student)
    public function destroy($id)
    {
        //
        $students = Student::findOrfail($id);
        $students->delete();

        return redirect()->route('students.index')->with('success', 'Student Successfully Deleted!');

    }
}
