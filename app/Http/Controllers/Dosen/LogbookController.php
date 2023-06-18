<?php

namespace App\Http\Controllers\Dosen;

use App\Http\Controllers\Controller;
use App\Models\Logbook;
use Illuminate\Http\Request;

class LogbookController extends Controller
{
    public function show($id)
    {
        $logbook = Logbook::findOrFail($id);

        return view('dosen.monitoring.logbook.show', compact('logbook'));
    }

    public function update(Request $request, $id)
    {
        $logbook = Logbook::findOrFail($id);
        $logbook->update(['catatan' => $request->catatan]);
        $logbook->save();

        return redirect()->route('dosen.monitoring.show', ['id' => $logbook->mahasiswa->id]);
    }
}
