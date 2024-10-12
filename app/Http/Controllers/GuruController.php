<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Siswa;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class GuruController extends Controller
{
    public function index() {
        $data = Guru::all();
        return view('pages.guru.index', compact('data'));
    }

    public function create() {
        return view('pages.guru.create');
    }

    private function checkExistingMataPelajaran($mataPelajaran) {
        $existingMataPelajaran = Guru::where('mata_pelajaran', $mataPelajaran)->first();

        if($existingMataPelajaran) {
            return redirect()->back()->with('error', 'Mata pelajaran sudah ada di database.');
        }
    }

    public function store(Request $request) {
        $validation = $this->checkExistingMataPelajaran($request->mata_pelajaran);

        if ($validation) {
            return $validation;
        }

        $guru = new Guru();
        $guru->nama = $request->nama;
        $guru->mata_pelajaran = $request->mata_pelajaran;
        $guru->save();

        return redirect('/guru');
    }

    public function show($id) {
        $guru = Guru::find($id);
        $siswa = Siswa::where('guru_id', $guru->id)->get();
        return view('pages.guru.detail', compact('guru', 'siswa'));
    }

    public function edit($id) {
        $data = Guru::find($id);
        return view('pages.guru.edit', compact('data'));
    }

    public function update(Request $request, $id) {
        $validation = $this->checkExistingMataPelajaran($request->mata_pelajaran);

        if ($validation) {
            return $validation;
        }

        $data = Guru::find($id);
        
        $data->nama = $request->nama;
        $data->mata_pelajaran = $request->mata_pelajaran;
        $data->save();

        return redirect('/guru');
    }

    public function destroy($id) {
        $data = Guru::find($id);
        $data->delete();

        return redirect('/guru');
    }

    public function search(Request $request) {
        $search = $request->input('search');

        if (empty($search)) {
            $data = Guru::all();
        } else {
            $data = Guru::where('nama', 'like', '%' . $search . '%')
                         ->orWhere('mata_pelajaran', 'like', '%' . $search . '%')
                         ->get();
        }

        return view('pages.guru.index', compact('data'));
    }
}
