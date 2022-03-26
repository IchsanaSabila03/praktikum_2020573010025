<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('mahasiswa', function () {
    $arrMahasiswa = [
        "Luhut Panjahitan", "Jokowi", "Vladimir putin", "Lisa Pertama",
    ];
    return view('mahasiswa')->with('mahasiswa', $arrMahasiswa);
});
Route::get('dosen', function () {
    $arrDosen = [
        "Pak amirullah", "Pak abdi", "Pak arhami", "Pak mulyadi",
    ];
    return view('dosen')->with('dosen', $arrDosen);
});

Route::get('gallery', function () {
    return view('gallery');
});

Route::get('admin', function () {
    return view('admin');
});
// Route::get('/mahasiswa', function () {
//     $nama = 'akramulfata';
//     $nilai = '80';
//     return view('mahasiswa', compact('nama', 'nilai'));
// });

// Route::get('/mahasiswa1', function () {
//     $nama = '<u>Elon Musk Batubara</u>';
//     $nilai = 75;
//     return view('mahasiswa1', compact('nama', 'nilai'));
// });

// Route::get('/mahasiswa3', function () {
//     $nama = 'Elon Musk Batubara';
//     $nilai = 80;
//     return view('mahasiswa3', compact('nama', 'nilai'));
// });

// Route::get('/mahasiswa4', function () {
//     $nama = 'Elon Musk Batubara';
//     $nilai = 80000;
//     return view('mahasiswa4', compact('nama', 'nilai'));
// });

// Route::get('/mahasiswa5', function () {
//     return view('mahasiswa5');
// });

// Route::get('/mahasiswa6', function () {
//     $nama = 'akramul fata';
//     $nilai = [80, 64, 30, 76, 95];
//     return view('mahasiswa6', compact('nama', 'nilai'));
// });

// Route::get('/mahasiswa7', function () {
//     $nama = 'Aidil Fitrah';
//     $nilai = [80, 64, 30, 76, 95];
//     return view('mahasiswa7', compact('nama', 'nilai'));
// });

// Route::get('/home', function () {
//     return view('halaman_home');
// });
// Route::get('/mahasiswa', function () {
//     // V nya harus huruf besar
//     return View::make('mahasiswa');
// });

// Route::get('/foldermahasiswa', function () {
//     return view('kampus.mahasiswa');
// });
// Route::get('/foldermahasiswa', function () {
//     return view('kampus/mahasiswa');
// });

// Route::get('/foldermahasiswa1', function () {
//     return view('kampus.datamahasiswa',
//         ["mahasiswa01" => "AkramulFata"], );
// });

// Route::get('/foldermahasiswa2', function () {
//     return view('kampus.datamahasiswa1',
//         [
//             "mahasiswa01" => "inra kenz",
//             "mahasiswa02" => "doni salmanan",
//             "mahasiswa03" => "ulfi rizkia",
//             "mahasiswa04" => "delliana putri",
//         ]);
// });
// Route::get('/foldermahasiswa3', function () {
//     $arrMahasiswa = ["inra kenz", "doni salmanan", "ulfi rizkia", "delliana putri",
//     ];
//     return view('kampus.datamahasiswa2', ['mahasiswa' => $arrMahasiswa]);
// });

// Route::get('/foldermahasiswa4', function () {
//     $arrMahasiswa = ["inra kenz", "doni salmanan", "ulfi rizkia", "delliana putri",
//     ];
//     return view('kampus.datamahasiswa3', ['mahasiswa' => $arrMahasiswa]);
// });
// Route::get('/foldermahasiswa5', function () {
//     return view('kampus.datamahasiswa4')->with('mahasiswa01', 'risa lestari');
// });

// Route::get('/foldermahasiswa6', function () {
//     $arrMahasiswa = [
//         "Doni sadikin", "syadzwina", "deliana putri", "indra kenz",
//     ];
//     return view('kampus.datamahasiswa5')->with('mahasiswa', $arrMahasiswa);
// });

// Route::get('/foldermahasiswa7', function () {
//     return view('kampus.datamahasiswa6')
//         ->with('mahasiswa01', 'doni sadikin')
//         ->with('mahasiswa02', 'syadzwina sahara')
//         ->with('mahasiswa03', 'deliana putri');
// });

// route::get('/foldermahasiswa8', function () {
//     return view('kampus.datamahasiswa7')
//         ->with('mahasiswa01', ('doni sadikin'))
//         ->with('mahasiswa02', 'syadzwina sahara')
//         ->with('mahasiswa03', 'deliana putri');
// });

// route::get('/foldermahasiswa9', function () {
//     $mahasiswa01 = "akramulfata";
//     $mahasiswa02 = "affit dal randi ";
//     $mahasiswa03 = "sirajul munira";
//     $mahasiswa04 = "aidil";
//     return view('kampus.datamahasiswa8', compact("mahasiswa01", "mahasiswa02", "mahasiswa03", "mahasiswa04"));
// });

// Route::get('/foldermahasiswa10', function () {
//     $mahasiswa01 = "akramulfata";
//     $mahasiswa02 = "affit dal randi ";
//     $mahasiswa03 = "sirajul munira";
//     $mahasiswa04 = "aidil";
//     return view('kampus.datamahasiswa9')->with(compact(
//         "mahasiswa01", "mahasiswa02", "mahasiswa03", "mahasiswa04"
//     ));
// });
// Route::get('/hello', function () {
//     return 'Hello World';
// });

// Route::get('/belajar', function () {
//     echo '<h1>Hello World </h1>';
//     echo '<p>Sedang Belajar Laravel</p>';
// });

// Route::get('/mahasiswa/profil/coba', function () {
//     echo '<h2 style="text-align: center"><u>Welcome Profil Coba</u></h2>';
// });

// Route::get('/mahasiswa/{akramul}', function ($nama) {
//     return "Tampilkan Data Mahasiswa Yang Bernama $nama";
// });

// Route::get('/stock_barang/{jenis}/{merek}', function ($jenis, $merek) {
//     return "Cek Sisa Stock Untuk $jenis,$merek";
// });
// // Route::get('/stock_barang/{jenis}/{merek}', function ($akramul, $fata) {
// //     return "Cek Sisa Stock Untuk $akramul,$fata";
// // });

// Route::get('/stock_barang/{jenis?}/{merek?}', function ($a = 'smartphone', $b = 'samsung') {
//     return "Cek sisa stock untuk $a $b";
// });

// Route::get('/user/{id}', function ($id) {
//     return "Tampilkan User Dengan id = $id";
// });

// Route::get('/user/{id}', function ($id) {
//     return "Tampilkan User Dengan id = $id";
// })->Where('id', '[0-9]+');

// Route::get('/user/{id}', function ($id) {
//     return "Tampilkan User Dengan id = $id";
// })->where('id', '[A-Z]{2}[0-9]+');

// Route::get('/hubungi_kami', function () {
//     return '<h1>Hubungi Kami</h1>';
// });
// Route::redirect('/contact_us', '/hubungi_kami');

// Route::prefix('/admin')->group(function () {
//     Route::get('/mahasiswa', function () {
//         echo "<h1>Daftar Mahasiswa</h1>";
//     });
//     Route::get('/dosen', function () {
//         echo "<h1>Daftar dosen</h1>";
//     });
//     Route::get('/karyawan', function () {
//         echo "<h1>Daftar karyawan</h1>";
//     });
// });

// Route::fallback(function () {
//     return "maaf, alamat tidak di temukan";
// });

// Route::get('/buku/1', function () {
//     return "Buku Ke-1";
// });
// Route::get('/buku/1', function () {
//     return "Buku Saya Ke-1";
// });
// Route::get('/buku/1', function () {
//     return "Buku Kita Ke-1";
// });

// Route::get('/buku/{a}', function ($a) {
//     return "Buku ke-$a";
// });
// Route::get('/buku/{b}', function ($b) {
//     return "Buku Saya ke-$b";
// });
// Route::get('/buku/{c}', function ($c) {
//     return "Buku Kita ke-$c";
// });

// Route::get('mahasiswa/andi', function () {
//     echo "Halaman Mahasiswa Andi";
// });
// // ini sama
// Route::get('/mahasiswa/andi', function () {
//     echo "Halaman Mahasiswa Andi";
// });
