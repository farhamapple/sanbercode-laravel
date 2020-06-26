<?php
/*
// Harus ditaro diluar
define('NAMA' , 'Farham Harvianto');
echo NAMA;


echo "<br>";

// bisa ditaruh didalam Kelas
const UMUR = 30;
echo UMUR
*/

// class Coba{
// 	const NAMA = 'Mizan';

 
// }

// echo Coba::NAMA;

// echo __LINE__; // Cetak Baris
// echo __FILE__; // Letak File
// echo __DIR__; // Direktory

// function coba(){

// 	return __FUNCTION__;
// }

// echo coba();


class Coba{

	public $kelas = __CLASS__;
}

$obj = new Coba;
echo $obj->kelas;

?>