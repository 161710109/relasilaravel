<?php

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
use Illuminate\Database\Seeder;
use App\mahasiswa;
use App\wali;
use App\dosen;
use App\hobi;

Route::get('/', function () {
    return view('welcome');
	});

    Route::get('relasi-1',function(){

    	$mahasiswa = mahasiswa::where('nim','=','161710109')->first();

    	return $mahasiswa->wali->nama;
	});

    Route::get('relasi-2',function(){
    	$mahasiswa=mahasiswa::where('nim','=','161710109')->first();
    	return$mahasiswa->dosen->nama;
    });

    Route::get('relasi-3',function(){
    	$dosen=dosen::where('nama','=','Yuliana')->first();
    	foreach($dosen->mahasiswa as $a)
    		echo '<li> nama :'. $a->nama . '<strong>' . $a->nim .'</strong></li>';
    });

    Route::get('relasi-4', function() {

		$a = Mahasiswa::where('nama', '=', 'Ferdiansyah Akbar Fauzi')->first();

		foreach ($a->hobi as $temp) 
			echo '<li>' . $temp->hobi . '</li>';

	});