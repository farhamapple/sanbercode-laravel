<?php

class Produk {
	public $judul, $penulis, $penerbit, $harga, $jmlHalaman, $waktuMain, $tipe;

	public function __construct( $judul = 'judul', $penulis = 'penulis', $penerbit = 'penerbit', $harga = 0, $jmlHalaman = 100, $waktuMain = 15, $tipe = 'tipe'){

		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;

		$this->jmlHalaman = $jmlHalaman;
		$this->waktuMain = $waktuMain;
		$this->tipe = $tipe;
	}

	public function getLabel(){
		return "$this->penulis, $this->penerbit";
	}

	public function getInfoLengkap()
	{
		# code...

		$str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} | (Rp. {$this->harga} ).";

		if($this->tipe == "Komik"){
			$str .= " - {$this->jmlHalaman} Halaman";
		}else{
			$str .= " - {$this->waktuMain} Jam";
		}

		return $str;
	}
}

class CetakInfoProduk{

	public function cetak( Produk $produk ){
		$str = "{$produk->judul} | {$produk->getLabel()} | (Rp. {$produk->harga})";

		return $str;
	}
}


$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 3000, 100, 0, "Komik");
$produk2 = new Produk("Uncharted", "Neil Druckmann", "Sony Computer", 250000, 0, 15, "Game");

echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();
?>