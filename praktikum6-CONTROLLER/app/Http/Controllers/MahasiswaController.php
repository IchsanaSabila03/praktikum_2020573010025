<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index(){
    // return("Ini adalah halaman mahasiswa");
    $arrMahasiswa = ["Ichsana Sabila","Jokowi","Vladimir Putin","Lisa Permata"];
    return view('mahasiswa')-> with ('mahasiswa',$arrMahasiswa);
    }
}
