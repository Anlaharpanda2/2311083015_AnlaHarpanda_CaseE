<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\hewan;

class HewanController extends Controller
{
    public function index()
    {
        $hewans = hewan::paginate(10);
        return view('hewan.index',compact('hewans'));
    }
    public function create()
    {
        return view ('hewan.create');
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_hewan' => 'required|string|max:255',
            'jenis_hewan' => 'required|string',
            'ras' => 'required|string',
            'tanggal_lahir' => 'required|date',
            'nama_pemilik' => 'required|string|max:255',
            'kontak_pemilik' => 'required|string|max:255',
            'status' => 'required|in:aktif,tidak_aktif',
        ]);
        hewan::create($validatedData);
        return redirect()->route('hewan.index')->with('success', 'Hewan berhasil ditambahkan!');
    }

    public function Show(string $id)
    {
        //detail datanyo
    }

    public function Trashed()
    {
        $hewans = hewan::onlyTrashed()->paginate(10);
        return view('hewan.trashed', compact('hewans'));
    }

    public function Restore(string $id){
        $hewans = hewan::withTrashed()->findOrfail($id);
        $hewans->restore();
        return redirect()->route('hewan.index')->with('success', 'Hewan berhasil pulihkan!');
    }
    public function edit(string $id)
    {
        $hewans = hewan::find($id);
        return view('hewan.edit', compact('hewans'));
    }
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama_hewan' => 'required|string|max:255',
            'jenis_hewan' => 'required|string',
            'ras' => 'required|string',
            'tanggal_lahir' => 'required|date',
            'nama_pemilik' => 'required|string|max:255',
            'kontak_pemilik' => 'required|string|max:255',
            'status' => 'required|in:aktif,tidak_aktif',
        ]);
        $hewans = hewan::find($id);
        $hewans -> update(
            [
                'nama_hewan' => $request->nama_hewan,
                'jenis_hewan' => $request->jenis_hewan,
                'ras' => $request->ras,
                'tanggal_lahir' => $request->tanggal_lahir,
                'nama_pemilik' => $request->nama_pemilik,
                'kontak_pemilik' => $request->kontak_pemilik,
                'status' => $request->status
            ]
        );
        return redirect()->route('hewan.index')->with('success', 'Data hewan Berhasil diupdate');
    }

    public function destroy(string $id)
    {
        $hewans = hewan::findOrFail($id);
        $hewans -> delete();
        return redirect()->route('hewan.index');
    }
    public function Permanen(string $id)
    {
        $hewans = hewan::withTrashed()->findOrFail($id);
        $hewans -> forceDelete();
        return redirect()->route('hewan.sampah');
    }
}
