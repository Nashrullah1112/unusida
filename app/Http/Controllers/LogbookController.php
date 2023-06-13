<?php

namespace App\Http\Controllers;

use App\Models\Logbook;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class LogbookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $logbook= Logbook::all();
        return view('pages.logbook', [
            'logbooks' => $logbook
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.logbook_mhs');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //   dd($request);
          $request->validate([
            'catatan' => 'required',
            'tanggal'=> 'required',
        ]);

        $cekMahasiswa = Mahasiswa::where('nim', $request->nim)->first();
        if(!empty($cekMahasiswa))
        {
            
            $isi_data = 
            [
                'mahasiswaId' => $cekMahasiswa->id,
                'minggu' => $request->minggu,
                'catatan' => $request->catatan,       
                'tanggal_lapor' => $request->tanggal,  
                    
            ];
            $tooltip_images = $request->file('upload');
            if (!empty($tooltip_images)) {
                $tooltip_imagesName = time() . '.' . $tooltip_images->extension();
                $tooltip_images->move(public_path('files'), $tooltip_imagesName);
                $isi_data['file_log'] = 'files/' . $tooltip_imagesName;
            }
            $cekMinggu = Logbook::where('mahasiswaId', $cekMahasiswa->id)->where('minggu', $request->minggu)->first();
            if(!empty($cekMinggu)) $cekMinggu->delete();
            
            Logbook::create($isi_data);
            return redirect('/logbook_mhs');
        }
         return "nim tidak ada";
        // dd("hhhhh");

        // dd($isi_data);

        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Logbook  $logbook
     * @return \Illuminate\Http\Response
     */
    public function show(Logbook $logbook)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Logbook  $logbook
     * @return \Illuminate\Http\Response
     */
    public function edit(Logbook $logbook)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Logbook  $logbook
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Logbook $logbook)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Logbook  $logbook
     * @return \Illuminate\Http\Response
     */
    public function destroy(Logbook $logbook)
    {
        //
    }
}
