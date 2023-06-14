<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Mahasiswa;
use App\Models\Dosen;
use Illuminate\Http\Request;

class MentorshipController extends Controller
{
    public function index()
    {
        $mahasiswas = Mahasiswa::all();

        return view('admin.mentorship.index', compact('mahasiswas'));
    }

    public function show($id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);
        $dosens = Dosen::all();

        return view('admin.mentorship.show', compact(['mahasiswa', 'dosens']));
    }

    public function update(Request $request, $id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);
        $data = [
            'dosen_id' => $request->id
        ];
        $mahasiswa->update($data);

        return redirect()->route('admin.mentorship.index');
    }
}
