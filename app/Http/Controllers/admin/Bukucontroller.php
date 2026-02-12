<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Buku;

class BukuController extends Controller
{
    public function index()
    {
        $bukus = Buku::all();
        return view('admin.buku.index', compact('bukus'));

    }

    public function create()
    {
        return view('buku.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'categories' => 'required',
        ]);

        Buku::create([
            'name' => $request->name,
            'categories' => $request->categories,
        ]);

        return redirect()
            ->route('buku.index')
            ->with('sukses', 'Buku berhasil ditambahkan');
    }

   public function edit(string $id)
{
    $buku = Buku::findOrFail($id);
    return view('admin.buku.edit', compact('buku'));
}


    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'categories' => 'required',
        ]);

        $buku = Buku::findOrFail($id);
        $buku->update([
            'name' => $request->name,
            'categories' => $request->categories,
        ]);

        return redirect()
            ->route('buku.index')
            ->with('sukses', 'Buku berhasil diupdate');
    }

    public function destroy($id)
    {
        $buku = Buku::findOrFail($id);
        $buku->delete();

        return redirect()
            ->route('buku.index')
            ->with('sukses', 'Buku berhasil dihapus');
    }
}
