<?php

interface InfoProduk{
	public function getInfoProduk();
}

Abstract class Produk {
	protected $judul, $penulis, $penerbit;
	protected $harga;

	protected $diskon = 0;

	public function __construct( $judul = 'judul', $penulis = 'penulis', $penerbit = 'penerbit', $harga = 0){

		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
	}



	public function getLabel(){
		return "$this->penulis, $this->penerbit";
	}

	abstract public function getInfo();

	
	// Getter SEtter
	public function setHarga($harga){

		$this->harga = $harga;
	}


	public function getHarga(){

		return $this->harga - ( $this->harga * $this->diskon / 100);
	}


	public function setJudul($judul){
		// Bisaa diValidasi
		if(!is_string($judul)){
			throw new Exception('Judul Harus String');
		}

		$this->judul = $judul;
	}

	public function getJudul(){

		return $this->judul;
	}

	public function setPenulis($penulis){
		// Bisaa diValidasi
		if(!is_string($penulis)){
			throw new Exception('penulis Harus String');
		}

		$this->penulis = $penulis;
	}

	public function getPenulis(){

		return $this->penulis;
	}

	public function setPenerbit($penerbit){
		// Bisaa diValidasi
		if(!is_string($penerbit)){
			throw new Exception('penulis Harus String');
		}

		$this->penerbit = $penerbit;
	}

	public function getPenerbit(){

		return $this->penerbit;
	}

	public function setDiskon($diskon){

		$this->diskon = $diskon;
	}

	public function getDiskon(){

		return $this->diskon;
	}



}

class Komik extends Produk implements InfoProduk{
	public $jmlHalaman;

	public function __construct($judul = 'judul', $penulis = 'penulis', $penerbit = 'penerbit', $harga = 0, $jmlHalaman = 0){

		parent::__construct($judul, $penulis, $penerbit, $harga);

		$this->jmlHalaman = $jmlHalaman;
	}

	public function getInfoProduk(){
		$str = "Komik : ".$this->getInfo()." - {$this->jmlHalaman} Halaman}";

		return $str;
	}

	public function getInfo(){
		$str = "{$this->judul} | {$this->getLabel()} | (Rp. {$this->harga} )";

		return $str;
	}


	

}

class Game extends Produk implements InfoProduk{
	public $waktuMain;

	public function __construct($judul = 'judul', $penulis = 'penulis', $penerbit = 'penerbit', $harga = 0, $waktuMain = 0){

		parent::__construct($judul, $penulis, $penerbit, $harga);

		$this->waktuMain = $waktuMain;
	}

	public function getInfoProduk(){
		$str = "Game : ".$this->getInfo()." - {$this->waktuMain} Jam}";

		return $str;
	}

	public function getInfo(){
		$str = "{$this->judul} | {$this->getLabel()} | (Rp. {$this->harga} )";

		return $str;
	}




	
	
}

class CetakInfoProduk{

	public $daftarProduk = array();

	public function tambahProduk(Produk $produk){
		$this->daftarProduk[] = $produk;

	}



	public function cetak(){
		$str = "DAFTAR PRODUK : <br>";

		foreach ($this->daftarProduk as $p) {
			# code...
			$str .= "- {$p->getInfoProduk()} <br>";
		}

		return $str;
	}
}

// Inisialisasi
$produkKomik = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 3000, 100);
$produkGame = new Game("Uncharted", "Neil Druckmann", "Sony Computer", 250000, 15);

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk($produkKomik);
$cetakProduk->tambahProduk($produkGame);

echo $cetakProduk->cetak();

//$obj = new Produk();


?>