<?php

Abstract class Produk {
	private $judul, $penulis, $penerbit;
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

	abstract public function getInfoProduk();

	public function getInfo(){
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