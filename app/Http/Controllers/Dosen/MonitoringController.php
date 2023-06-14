<?php

namespace App\Http\Controllers\Dosen;

use App\Http\Controllers\Controller;
use App\Models\Dosen;
use App\Models\Mahasiswa;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class MonitoringController extends Controller
{
    public function index()
    {
        $dosen = Dosen::where('user_id', '=', Auth::id())->firstOrFail();
        // dd($dosen);

        return view('dosen.monitoring.index', compact('dosen'));
    }

    public function show($id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);

        return view('dosen.monitoring.show', compact('mahasiswa'));
    }
}
