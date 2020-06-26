<?php

class Produk {
	public $judul, $penulis, $penerbit, $harga;

	public function __construct( $judu = 'judul', $penulis = 'penulis', $penerbit = 'penerbit', $harga = 0){

		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
	}

	public function getLabel(){
		return "$this->penulis, $this->penerbit";
	}
}


$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 3000);
?>