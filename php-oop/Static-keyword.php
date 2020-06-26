<?php

class Produk {
	private $judul, $penulis, $penerbit;
	private $harga;

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

	public function getInfoProduk(){
		$str = "{$this->judul} | {$this->getLabel()} | (Rp. {$this->harga} )";

		return $str;
	}

	
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

class Komik extends Produk{
	public $jmlHalaman;

	public function __construct($judul = 'judul', $penulis = 'penulis', $penerbit = 'penerbit', $harga = 0, $jmlHalaman = 0){

		parent::__construct($judul, $penulis, $penerbit, $harga);

		$this->jmlHalaman = $jmlHalaman;
	}

	public function getInfoProduk(){
		$str = "Komik : ".parent::getInfoProduk()." - {$this->jmlHalaman} Halaman}";

		return $str;
	}

	

}

class Game extends Produk{
	public $waktuMain;

	public function __construct($judul = 'judul', $penulis = 'penulis', $penerbit = 'penerbit', $harga = 0, $waktuMain = 0){

		parent::__construct($judul, $penulis, $penerbit, $harga);

		$this->waktuMain = $waktuMain;
	}

	public function getInfoProduk(){
		$str = "Game : ".parent::getInfoProduk()." - {$this->waktuMain} Jam}";

		return $str;
	}

	
	
}

class CetakInfoProduk{

	public function cetak( Produk $produk ){
		$str = "{$produk->judul} | {$produk->getLabel()} | (Rp. {$produk->harga})";

		return $str;
	}
}

// Inisialisasi
$produkKomik = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 3000, 100);
$produkGame = new Game("Uncharted", "Neil Druckmann", "Sony Computer", 250000, 15);



echo $produkKomik->getInfoProduk();
echo "<br>";
echo $produkGame->getInfoProduk();
echo "<hr>";

$produkGame->setDiskon(50);
echo $produkGame->getHarga();

echo "<hr>";
$produkKomik->setJudul('One Piece');
echo $produkKomik->getJudul();
echo "<br>";
echo $produkKomik->getPenulis();
?>