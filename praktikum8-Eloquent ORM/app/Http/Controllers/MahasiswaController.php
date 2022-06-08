<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    //kode program akan kita tulis disini
    public function cekObject(){
        $mahasiswa = new Mahasiswa;
        $mahasiswa->nim = '19003036';
        $mahasiswa->nama = 'Ichsanasabila';
        $mahasiswa->tanggal_lahir = '03 10 2002';
        $mahasiswa->ipk = 3.5;
        $mahasiswa->save();
        
        dump($mahasiswa);
    }
}