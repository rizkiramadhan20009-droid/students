<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Siswa;

class SiswaController extends Controller
{
    public function index()
    {
        $siswas = Siswa::latest()->paginate(10);
        return view('admin.siswa.index', compact('siswas'));
    }
    
    public function create()
    {
        return view('admin.siswa.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required'
        ]);

        Siswa::create([
            'nama' => $request->nama
        ]);

        return redirect()->route('siswa.index')
            ->with('success', 'Data Berhasil Ditambahkan');
    }

    public function edit($id)
    {
        $siswa = Siswa::findOrFail($id);
        return view('admin.siswa.edit', compact('siswa'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required'
        ]);

        $siswa = Siswa::findOrFail($id);
        $siswa->update([
            'nama' => $request->nama
        ]);

        return redirect()->route('siswa.index')
            ->with('success', 'Data Berhasil Diupdate');
    }

    public function destroy($id)
    {
        $siswa = Siswa::findOrFail($id);
        $siswa->delete();

        return redirect()->back()
            ->with('success', 'Data Berhasil Dihapus');
    }
}
