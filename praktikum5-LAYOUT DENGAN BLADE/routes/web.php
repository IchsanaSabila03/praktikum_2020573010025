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
//1. Route bawaan laravel
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('mahasiswa', function (){
$arrMahasiswa = ["Ichsana Sabila","Jokowi","Vladimir Putin",
"Lisa Permata"];
return view('mahasiswa')-> with ('mahasiswa',$arrMahasiswa);
});
Route::get('dosen', function (){
$arrDosen = ["Ichsana Sabila S.Tr.kom","Prof.Silvia Nst, M.farm",
"Dr. Umar Agustinus","Dr.Syahrial M.kom"];
return view('dosen')->with('dosen',$arrDosen);
});
Route::get('gallery', function (){
return view('gallery');
});

// Route::get('/web', function (){
//         $books = [[
//             'id' => 2,
//             'title' => 'Post Pertama',
//             'author' => 'Ichsana',
//             'publication' => 'Test',
//             'year' => '2021'
//         ],[
//             'id' => 3,
//             'title' => 'Post Kedua',
//             'author' => 'Sabila',
//             'publication' => 'Test',
//             'year' => '2022'
//         ]];
//         return view('index',[
//             'books' => $books,
//         ]);
//     });

// Route::get('/mahasiswa', function (){
//     $nama = 'Ichsana Sabila';
//     $nilai = [80,64,30,76,95];
//     return view('mahasiswa', compact ('nama','nilai'));
// });

// Route ::get('/home', function () {
//     return view('halaman_home');
// });

// Route :: get ('/mahasiswa', function() {
//     return View::make('kampus.mahasiswa');
// });

// Route :: get ('/home', function(){
//     return view('home',[
//         'title' => 'home'
//     ]);
// });

// Route :: get ('/profile', function(){
//     return view('profile',[
//         'title' => 'profile'
//     ]);
// });

// Route :: get ('/about', function(){
//     return view('about',[
//         'title' => 'about'
//     ]);
// });

// //2. membuat Route
// Route::get('/hello', function(){
// return 'Hello World';
// });

// Route::get('/belajar',function(){
// echo '<h1>Hello World</h1>';
// echo '<p> Sedang Belajar Laravel </p>';
// });

// Route::get('/mahasiswa/profil/coba',function(){
// echo '<h2 style="text-align: center"><u>Welcome Profil Coba</u></h2>';
// });

// //3. Route Parameter
// Route::get('/mahasiswa/{nama}',function($nama){
// return "Tampilkan data mahasiswa bernama $nama";
// });

// //4. Route Parameter dengan 2 parameter
// Route::get('/stok_barang/{jenis}/{merek}', function ($jenis,$merek){
// return "cek sisa stok utuk $jenis $merek";
// });

// Route::get('/stok_barang/{jenis}/{merek}',function($a,$b){
// echo "Cek sisa stok untuk $a $b";
// });

// //5. Route dengan Optional Parameter
// Route::get('/stok_barang/{jenis?}/{merek?}',
// function($a='smartphone',$b='samsung'){
// return "Cek sisa stok untuk $a $b";
// });

// Route::get('/dispenser/{jenis?}/{merek?}',
// function($a='dispenser',$b='samsung'){
// return "Cek sisa stok untuk $a $b";
// });

// //6. Route Parameter dengan Regular Expression
// Route::get('/user/{id}', function($id) {
// return "Tampilkan user dengan id = $id";
// });

// Route::get('/user/{id}', function($id) {
// return "Tampilkan user dengan id = $id";
// })->where('id','[0-9]+');

// Route::get('/user/{id}', function($id) {
// return "Tampilkan user dengan id = $id";
// })->where('id','[A-Z]{2}[0-9]+');

// //7. Route Redirect
// Route::get('/hubungi-kami', function() {
// return '<h1>Hubungi kami</h1>';
// });

// Route::redirect('/contact-us','/hubungi-kami');

// //8. Route Group
// Route::get('/admin/mahasiswa', function() {
// return "<h1>Daftar Mahasiswa</h1>";
// });
// Route::get('/admin/dosen', function() {
// return "<h1>Daftar Dosen</h1>";
// });
// Route::get('/admin/karyawan', function() {
// return "<h1>Daftar karyawan</h1>";
// });

// //9. Route Fallback
// Route::fallback(function() {
// return "Maaf, alamat tidak ditemukan";
// });

// //10. Route Priority
// Route::get('/buku/1', function() {
// return "Buku ke-1";
// });
// Route::get('/buku/1', function() {
// return "Buku saya ke-1";
// });
// Route::get('/buku/1', function() {
// return "Buku kita ke-1";
// });

// Route::get('/buku/{a}', function($a) {
// return "Buku ke-$a";
// });
// Route::get('/buku/{b}', function($b) {
// return "Buku saya ke-$b";
// });
// Route::get('/buku/{c}', function($c) {
// return "Buku kita ke-$c";
// });

// //11. Melihat Daftar Route
