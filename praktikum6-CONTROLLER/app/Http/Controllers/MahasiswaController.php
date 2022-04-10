<?php

namespace App\Http\Controllers;

class MahasiswaController extends Controller
{
    public function mahasiswa()
    {
        $arrMahasiswa = ["Ichsana Sabila","Jokowi","Vladimir Putin","Lisa Permata"];
        return view('mahasiswa')->with('mahasiswa', $arrMahasiswa);
    }
    public function dosen()
    {
        $arrDosen = ["Ichsana Sabila S.Tr.kom","Prof.Silvia Nst, M.farm","Dr. Umar Agustinus","Dr.Syahrial M.kom"];
        return view('dosen')->with('dosen', $arrDosen);
    }
    public function gallery()
    {

        return view('gallery');
    }

    public function info($jurusan, $prodi)
    {
        $data = ['Di Informasikan Pada Saat Ramadhan Kuliah Hanya Libur Dua Minggu', 'Di Informasikan Pada Saat Ramadhan Kuliah Hanya Libur Dua Minggu Dan Menurut Dosen Nya'];
        return view('informasi')->with('data', $data);
    }
}