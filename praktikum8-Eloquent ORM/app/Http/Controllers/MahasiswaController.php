<?php
namespace App\Http\Controllers;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;
class MahasiswaController extends Controller
{
    //kode program akan kita tulis disini
    public function massdelete()
    {
        $mahasiswa = Mahasiswa::where('ipk','>',3)->delete();

        dump($mahasiswa);
    }
}