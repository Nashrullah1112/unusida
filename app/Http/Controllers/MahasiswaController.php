<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mahasiswa = Mahasiswa::all();
        return view('pages.mahasiswa', [
            'mahasiswas' => $mahasiswa
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.mahasiswa_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
            'nim' => 'required',
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'agama' => 'required',
            'jurusan' => 'required',
            'email' => 'required',
            'tahun_angkatan' => 'required',
            'semester' => 'required',
            'alamat' => 'required',
            'program' => 'required',
        ]);
        // dd("hhhhh");

        $isi_data = [
            'nim' => $request->nim,
            'nama'=> $request->nama,
            'jenis_kelamin'=> $request->jenis_kelamin,
            'agama'=>$request->agama,
            'jurusan'=>$request->jurusan, 
            'email'=>$request->email,
            'tahun_angkatan'=>$request->tahun_angkatan,
            'semester'=>$request->semester,
            'alamat'=>$request->alamat,
            'program'=>$request->program,
              
        ];

        // dd($isi_data);

         Mahasiswa::create($isi_data);
        return redirect('/mahasiswa');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
