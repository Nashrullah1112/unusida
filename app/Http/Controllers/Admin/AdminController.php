<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Mahasiswa;
use App\Models\Dosen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        $users = User::where('id', '!=', Auth::id())->get();

        return view('admin.dashboard', compact('users'));
    }

    public function verify($id)
    {
        $user = User::findOrFail($id);
        $user->verified = true;
        $user->save();

        return redirect()->route('admin.dashboard');
    }

    public function mentorships()
    {
        $mahasiswas = Mahasiswa::all();

        return view('admin.mentorships', compact('mahasiswas'));
    }

    public function mentorship($id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);
        $dosens = Dosen::all();

        return view('admin.mentorship', compact(['mahasiswa', 'dosens']));
    }

    public function mentorshipUpdate(Request $request, $id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);
        $data = [
            'dosen_id' => $request->id
        ];
        $mahasiswa->update($data);

        return redirect()->route('admin.mentorships');
    }
}
