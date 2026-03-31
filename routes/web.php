<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/profil', function () {
    echo "<h1>Profil</h1>";
    return 'Nama: Rayfo Huda';
});

Route::get('/profil/ti/trpl', function () {
    echo "<h1>Jurusan Teknologi Informasi</h1>";
    echo "<h1>Prodi D4 TRPL</h1>";
});

Route::get('/mahasiswa/{nama}/{nim}', function ($nama, $nim) {
    return "Ketua Kelas adalah $nama dengan nim $nim";
});

Route::get('/dosen/{nama?}/{nip?}', function ($nama="rayfo", $nip="123") {
    return "Ketua Kelas adalah $nama dengan nim $nip";
});

Route::get('/user/{id}', function ($id) {
    return "user akun memiliki id $id";
})->where ('id','[0-9]+');

//
Route::get('/buku-tamu', function () {
    return "<h2>buku tamu</h2>";
});
Route::redirect('/guest-book','/buku-tamu');

//
Route::prefix('/login')->group(function() {
    Route::get('/mahasiswa', function () {
    return "<h2>Login Mahasiswa</h2>";
    });

    Route::get('/dosen', function () {
    return "<h2>Login Dosen</h2>";
    });

    Route::get('/admin', function () {
    return "<h2>Login admin</h2>";
    });
});

route::fallback(function() {
    return "<h2>halaman tidak ditemukan</h2>";
});

Route::get('/kahasiswa', function () {
    $arrMhs=[ 'ucup','udin','ujang'
   ];
    return view('akademik.mahasiswa',['mhs' => $arrMhs]); //    ->with(compact('mhs1','mhs2','mhs3'));
});


Route::get('/mahasiswa', function () {
    $nama='Taylor Otwell';
    $nim='2411082020';
    $total_nilai=100;
    return view('akademik.nilai_mahasiswa',compact('nama','nim', 'total_nilai'));
});

Route::get('/perulangan', function (){
    $nama='Taylor Otwell';
    $nim='2411082020';
    $total_nilai=[80,70,20, 60, 45];
    return view('akademik.perulangan',compact('nama','nim', 'total_nilai'));
});