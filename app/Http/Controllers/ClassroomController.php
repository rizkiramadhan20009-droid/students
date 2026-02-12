<?php

namespace App\Http\Controllers;

use App\Models\Classroom;
use Illuminate\Http\Request;

class ClassroomController extends Controller
{
    public function index()
    {
        $classrooms = Classroom::all();
        return view('classrooms.index', compact('classrooms'));
    }

    public function create()
    {
        return view('classrooms.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'  => 'required|string|max:100',
            'level' => 'required|string|max:4',
        ]);

        Classroom::create([
            'name'  => $request->name,
            'level' => $request->level,
        ]);

        return redirect()->route('classrooms.index')
                         ->with('success', 'Classroom berhasil ditambahkan');
    }

    public function show(Classroom $classroom)
    {
        return view('classrooms.show', compact('classroom'));
    }

    public function edit(Classroom $classroom)
    {
        return view('classrooms.edit', compact('classroom'));
    }

    public function update(Request $request, Classroom $classroom)
    {
        $request->validate([
            'name'  => 'required|string|max:100',
            'level' => 'required|string|max:4',
        ]);

        $classroom->update([
            'name'  => $request->name,
            'level' => $request->level,
        ]);

        return redirect()->route('classrooms.index')
                         ->with('success', 'Classroom berhasil diupdate');
    }

    public function destroy(Classroom $classroom)
    {
        $classroom->delete();

        return redirect()->route('classrooms.index')
                         ->with('success', 'Classroom berhasil dihapus');
    }
}
