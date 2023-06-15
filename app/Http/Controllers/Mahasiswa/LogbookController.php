<?php

namespace App\Http\Controllers\Mahasiswa;

use App\Http\Controllers\Controller;
use App\Models\Logbook;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LogbookController extends Controller
{
    public function index()
    {
        $mahasiwa = User::with('mahasiswa')->find(Auth::id());
        $logbooks = Logbook::where('mahasiswa_id', '=', $mahasiwa->id)->get();

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

    public function update(Request $request, $id)
    {
        $logbook = Logbook::findOrFail($id);
        $logbook->update(['logbook' => $request->logbook]);
        $logbook->save();

        return redirect()->route('mahasiswa.logbook.index');
    }

    public function insert(Request $request)
    {
        $input = [
            'mahasiswa_id' => Auth::id(),
            'logbook' => $request->logbook,
            'tanggal_lapor' => $request->tanggal_lapor
        ];

        Logbook::create($input);

        return redirect()->route('mahasiswa.logbook.index');
    }
}
