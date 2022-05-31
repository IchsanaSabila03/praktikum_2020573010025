<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use \App\Http\Controllers\Coba\Foo;

class PageController extends Controller
{
    public function index()
    {
        return ('Halaman Home');
    }

    public function tampil()
    {
        $arrMahasiswa = [
            "Luhut Panjahitan", "Jokowi", "Vladimir putin", "Lisa Pertama",
        ];
        return view('mahasiswa')->with('mahasiswa', $arrMahasiswa);
    }

    public function cobaFacades()
    {
        echo Str::snake('SedangBelajarLaravelUncover');
        echo "<br>";
        echo Str::kebab('SedangbelajarLaravelUncover');
    }

    public function cobaClass()
    {
        // kenalkan class Foo
        // buat variabel baru
        $foo = new Foo();
        echo $foo->bar();
    }
}
