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

    public function create()
    {
        return view('mahasiswa.logbook.create');
    }

    public function show($id)
    {
        $logbook = Logbook::findOrFail($id);

        return view('mahasiswa.logbook.show', compact('logbook'));
    }

    public function insert(Request $request)
    {
        $mahasiswa = Mahasiswa::where('user_id', '=', Auth::id())->first();

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $extension = $file->getClientOriginalExtension();
            $fileName = 'file-logbook-' . str_replace(' ', '-', $mahasiswa->user->name) . '-' . now()->format('YmdHis') . '.' . $extension;
            $path = $file->storeAs('public/logbooks', $fileName);
            $path = 'storage/logbooks/' . $fileName;
        } else {
            return redirect()->route('mahasiswa.logbook.index')->with('error', 'File not found.');
        }

        $input = [
            'mahasiswa_id' => $mahasiswa->id,
            'logbook' => $request->logbook,
            'file' => $path,
            'tanggal_lapor' => $request->tanggal_lapor
        ];
        Logbook::create($input);

        return redirect()->route('mahasiswa.logbook.index');
    }
}
