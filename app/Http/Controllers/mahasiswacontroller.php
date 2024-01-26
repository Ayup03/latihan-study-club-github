<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        //$data = mahasiswa::all();
        $data = [];
        return view('mhs.index', ['datamhs'=>$data]);
    }
}
