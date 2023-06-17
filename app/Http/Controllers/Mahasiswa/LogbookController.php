<?php

namespace App\Http\Controllers\Mahasiswa;

use App\Http\Controllers\Controller;
use App\Models\Logbook;
use App\Models\Mahasiswa;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LogbookController extends Controller
{
    public function index()
    {
        $mahasiswa = Mahasiswa::where('user_id', '=', Auth::id())->first();
        $logbooks = Logbook::where('mahasiswa_id', '=', $mahasiswa->id)->get();

        return view('mahasiswa.logbook.index', compact('logbooks'));
    }

    public function create(Request $request)
    {
        return view('mahasiswa.logbook.create');
    }

    public function show($id)
    {
        $logbook = Logbook::findOrFail($id);

        return view('mahasiswa.logbook.show', compact('logbook'));
    }

    // public function update(Request $request, $id)
    // {
    //     $logbook = Logbook::findOrFail($id);
    //     $logbook->update(['logbook' => $request->logbook]);
    //     $logbook->save();

    //     return redirect()->route('mahasiswa.logbook.index');
    // }

    public function insert(Request $request)
    {
        $mahasiswa = Mahasiswa::where('user_id', '=', Auth::id())->first();
        $input = [
            'mahasiswa_id' => $mahasiswa->id,
            'logbook' => $request->logbook,
            'tanggal_lapor' => $request->tanggal_lapor
        ];

        Logbook::create($input);

        return redirect()->route('mahasiswa.logbook.index');
    }
}
