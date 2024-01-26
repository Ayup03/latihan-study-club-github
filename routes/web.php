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

Route::get('/', function () {
    return view("welcome");
});

//latihan mengambil data dari url dan dikirim ke view
Route::get('/latihankirimdata/{title}', function ($title) {
    return view("welcome", ['title' => 'title']);
});

Route::get('/studyclub/', function () {
    //return view welcome
    echo "anda tidak memasukkan nama study club";
   
});

Route::get('/studyclub/{namastudyclub}', function ($nama) {
    echo "Selamat datang di study club" .$nama;
});

Route::get('/studyclub/angka{nama}', function ($nama) {
    //return view('welcome');
    echo "Selamat datang di study club ke-" .$nama;
})->where ('nama', '[0-9]+');

//latihan blade
Route::get('/latihanblade', function () {
    return view('latihan', ['data1' => 0]);
});

//latihan blade
Route::get('/latihanblade2', function () {
    return view('home');
});

//latihan templeting
Route::get('/dashboard', function () {
    return view('index');
})->name('dashboard');


use App\Http\Controller\mahasiswacontroller;

Route::resource('mahasiswa', mahasiswacontroller::class);

// //menampilkan data dalam xampp
// use App\Http\Controllers\KategoriController;
// //latihan menggunakan model
// Route::get('/kategori/semua',[KategoriController::class,'semua']);


use App\Http\Controllers\KategoriController2;

route::resource('kategori',KategoriController2::class);


// //menambahkan kategori semua
// Route::get('kategori/tambah', function (){
//     Kategori::create([
//         'nama_kategori' => "pakaian baru",
//         'deskripsi' => "semua jenis pakaian baru"
//     ]);
   
// });

// //memperbaharui data
// Route::get('kategori/update/{id}', function ($id){
//     Kategori::find($id)->update([
//         'nama_kategori' => "pakaian anak",
//         'deskripsi' => "semua jenis pakaian anak"
//     ]);
   
// });

// //menghapus data 

// //menambahkan kategori semua
// Route::get('kategori/hapus/{id}', function ($id){
//     Kategori::find($id)->delete();
// });


