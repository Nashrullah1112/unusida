<?php

namespace App\Http\Controllers;

use App\Models\cr;
use App\Models\Dosen;
use App\Models\Mahasiswa;
use App\Models\Program;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mahasiswa = Mahasiswa::all();
        $dosen = Dosen::all();
        return view('pages.register', [
            'mahasiswas' => $mahasiswa,
            'dosens'=> $dosen,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data = collect($request)->toArray();
        $tooltip_images = $request->file('file_spp');
        if (!empty($tooltip_images)) {
            $tooltip_imagesName = time() . '.' . $tooltip_images->extension();
            $tooltip_images->move(public_path('files'), $tooltip_imagesName);
            $data['file_spp'] = 'files/' . $tooltip_imagesName;
        }    
        
        // dd()
        $result = Program::create($data);
        // dd($result);
        return redirect()->route('/admin');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function show(cr $cr)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function edit(cr $cr)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, cr $cr)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function destroy(cr $cr)
    {
        //
    }
}
