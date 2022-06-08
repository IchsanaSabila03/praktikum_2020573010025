<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    //kode program akan kita tulis disini
    public function cekObject(){
        $mahasiswa = new Mahasiswa;
        dump($mahasiswa);
    }
}