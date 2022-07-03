<?php
namespace App\Http\Controllers;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;
class MahasiswaController extends Controller
{
    //kode program akan kita tulis disini
    public function allView(){
    $mahasiswas = Mahasiswa::all();
    return view('tampil_mahasiswa',['mahasiswas' => $mahasiswas]);
    }
}
    // foreach ($result as $mahasiswa) {
    //     echo($mahasiswa->id). '<br>';
    //     echo($mahasiswa->nim). '<br>';
    //     echo($mahasiswa->nama). '<br>';
    //     echo($mahasiswa->tanggal_lahir). '<br>';
    //     echo($mahasiswa->ipk). '<br>';
    //     echo "<hr>";
    // }

    // echo($result[0]->id). '<br>';
    // echo($result[0]->nim). '<br>';
    // echo($result[0]->nama). '<br>';
    // echo($result[0]->tanggal_lahir). '<br>';
    // echo($result[0]->ipk);

    // dump($result);
