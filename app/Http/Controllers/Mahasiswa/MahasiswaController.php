<?php

namespace App\Http\Controllers\Mahasiswa;

use App\Http\Controllers\Controller;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = Auth::user()->mahasiswa;

        return view('mahasiswa.dashboard', compact('mahasiswa'));
    }

    public function profile(Request $request, $id)
    {
        $data = [
            'user_id' => $id,
            'alamat' => $request->alamat,
            'nim' => $request->nim,
            'gender' => $request->gender,
            'agama' => $request->agama,
            'jurusan' => $request->jurusan,
            'tahun_angkatan' => $request->tahun_angkatan,
            'semester' => $request->semester,
            'program' => $request->program,
        ];

        Mahasiswa::create($data);
        // dd($data);

        return redirect()->route('mahasiswa.dashboard');
    }
}
