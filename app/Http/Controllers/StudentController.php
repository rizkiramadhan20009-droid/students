<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Classroom;
use Illuminate\Http\Request;

class StudentController extends Controller
{

    public function index()
    {

        $students = Student::with('classroom')->get();

        return view('students.index', compact('students'));
    }


    public function create()
    {
        $classrooms = Classroom::all();

        return view('students.create', compact('classrooms'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'           => 'required|string|max:100',
            'classrooms_id'  => 'required|exists:classrooms,id',
            'gender'         => 'required|in:L,P',
        ]);

        Student::create([
            'name'          => $request->name,
            'classrooms_id' => $request->classrooms_id,
            'gender'        => $request->gender,
        ]);

        return redirect()->route('students.index')
                         ->with('success', 'Student berhasil ditambahkan');
    }


    public function show(Student $student)
    {

        $student->load('classroom');

        return view('students.show', compact('student'));
    }


    public function edit(Student $student)
    {
        $classrooms = Classroom::all();

        return view('students.edit', compact('student', 'classrooms'));
    }

    public function update(Request $request, Student $student)
    {
        $request->validate([
            'name'           => 'required|string|max:100',
            'classrooms_id'  => 'required|exists:classrooms,id',
            'gender'         => 'required|in:L,P',
        ]);

        $student->update([
            'name'          => $request->name,
            'classrooms_id' => $request->classrooms_id,
            'gender'        => $request->gender,
        ]);

        return redirect()->route('students.index')
                         ->with('success', 'Student berhasil diupdate');
    }

  
    public function destroy(Student $student)
    {
        $student->delete();

        return redirect()->route('students.index')
                         ->with('success', 'Student berhasil dihapus');
    }
}
