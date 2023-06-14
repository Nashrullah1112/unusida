<?php

namespace App\Http\Controllers\Dosen;

use App\Http\Controllers\Controller;
use App\Models\Dosen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DosenController extends Controller
{
    public function index()
    {
        $dosen = Dosen::where('user_id', '=', Auth::id())->firstOrFail();
        // dd($dosen);

        return view('dosen.dashboard', compact('dosen'));
    }

    public function profile(Request $request, $id)
    {
        $data = [
            'user_id' => $id,
            'alamat' => $request->alamat,
            'nip' => $request->nip,
            'gender' => $request->gender,
            'agama' => $request->agama,
        ];

        Dosen::create($data);

        return redirect()->route('dosen.dashboard');
    }
}
