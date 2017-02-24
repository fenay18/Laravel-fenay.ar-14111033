<?php

use App\mahasiswa;
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
Route::get('/', 'ViewController@index');
Route::get('/tambah', function (){
	$mahasiswa = new mahasiswa;
	$mahasiswa -> NIM = "13111039";
	$mahasiswa -> nama = "Dimas Setiawan";
	$mahasiswa -> alamat = "Bandung";
	$mahasiswa -> save ();
});
Route::get('/ubah', function (){
	$mahasiswa = mahasiswa::find(3);
	$mahasiswa -> NIM = "15111229";
	$mahasiswa -> nama = "Sri Runia";
	$mahasiswa -> alamat = "Batam";
	$mahasiswa -> save ();
});
Route::get('/tampil', function (){
	$mahasiswa = mahasiswa::all();
	foreach($mahasiswa as $mhs)
	{
		echo "<br>NIM</br> : ";
		echo $mhs->NIM;
		echo "<br>Nama</br> : ";
		echo $mhs->nama;
		echo"<br>Alamat</br> : ";
		echo $mhs->alamat;
		echo "<br>";
	}
});
Route::get('/hapus', function (){
	{
		$mahasiswa = mahasiswa::find(3);
		$mahasiswa -> delete();
		echo "Data Berhasil Dihapus";
	}
});
