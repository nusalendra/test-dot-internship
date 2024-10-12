<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index() {
        $data = Siswa::all();
        return view('pages.siswa.index', compact('data'));
    }

    public function create() {
        $guru = Guru::all();
        return view('pages.siswa.create', compact('guru'));
    }

    public function store(Request $request) {
        $siswa = new Siswa();
        $siswa->guru_id = $request->guru_id;
        $siswa->nama = $request->nama;
        $siswa->save();

        return redirect('/siswa');
    }

    public function show($id) {

    }

    public function edit($id) {
        $siswa = Siswa::find($id);
        $guru = Guru::all();
        return view('pages.siswa.edit', compact('siswa', 'guru'));
    }

    public function update($id, Request $request) {
        $siswa = Siswa::find($id);
        $siswa->guru_id = $request->guru_id ?? $siswa->guru_id;
        $siswa->nama = $request->nama ?? $siswa->nama;

        $siswa->save();

        return redirect('siswa');
    }

    public function destroy($id) {
        $siswa = Siswa::find($id);
        $siswa->delete();

        return redirect('siswa');
    }

    public function search(Request $request) {
        $search = $request->input('search');

        if (empty($search)) {
            $data = Siswa::all();
        } else {
            $data = Siswa::where('nama', 'like', '%' . $search . '%')->get();
        }

        return view('pages.siswa.index', compact('data'));
    }
}
