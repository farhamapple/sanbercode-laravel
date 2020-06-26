<?php

require_once 'App/init.php';

// Inisialisasi
// $produkKomik = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 3000, 100);
// $produkGame = new Game("Uncharted", "Neil Druckmann", "Sony Computer", 250000, 15);

// $cetakProduk = new CetakInfoProduk();
// $cetakProduk->tambahProduk($produkKomik);
// $cetakProduk->tambahProduk($produkGame);

// echo $cetakProduk->cetak();

use App\Service\User as ServiceUser;
use App\Produk\User as ProdukUser;

new ServiceUser();

echo "<br>";
new ProdukUser();

?>