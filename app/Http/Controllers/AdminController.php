<?php

namespace App\Http\Controllers;

use App\Models\Program;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        $data = Program::with('mahasiswa', 'dosen')->get();
        dd($data);
        // $dataResult = collect($data)->toArray();
        // dd($dataResult);
        return view('pages.admin', ['programs' => $data]);
        dd($data);
    }
}
