<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\User as ModelsUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use User;

class DosenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dosen = Dosen::all();
        return view('pages.dosen', [
            'dosen' => $dosen
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.dosen_create');
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
            // $request->validate([
            //     'nip' => 'required',
            //     'Nama_Dosen' => 'required',
            //     'jenis_kelamin' => 'required',
            //     'agama' => 'required',
            //     'alamat' => 'required',
            //     'email_dosen' => 'required',
            // ]);
            // dd("hhhhh");
            $users = [
                'email' => $request->email,
                'name' => $request->nama,
                'password' => Hash::make($request->password),
            ];
            $isi_data = [
                'nip' => $request->nip,
                'nama'=> $request->nama,
                'kelamin'=> $request->kelamin,
                'agama'=>$request->agama, 
                'email'=>$request->email,
                'alamat'=>$request->alamat,   
            ];
            
            
            // dd($isi_data);
            ModelsUser::create($users);
             Dosen::create($isi_data);
            return redirect('/dosen');
        
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dosen  $dosen
     * @return \Illuminate\Http\Response
     */


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dosen  $dosen
     * @return \Illuminate\Http\Response
     */
    public function edit(Dosen $dosen)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Dosen  $dosen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dosen $dosen)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dosen  $dosen
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dosen $dosen)
    {
        //
    }
}
