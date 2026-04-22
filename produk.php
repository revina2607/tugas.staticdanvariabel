<?php

class Produk {

    public static $jumlahProduk = 0;

    public $namaProduk;
    public $harga;

    public function __construct($namaProduk, $harga) {
        $this->namaProduk = $namaProduk;
        $this->harga = $harga;
        self::$jumlahProduk++;
    }

    public function tampilProduk() {
        echo "Nama Produk: " . $this->namaProduk . "<br>";
        echo "Harga Produk: Rp " . number_format($this->harga, 0, ',', '.') . "<br><br>";
    }
}

$p1 = new Produk("Laptop", 7000000);
$p2 = new Produk("Mouse", 150000);
$p3 = new Produk("Keyboard", 300000);

echo "<h2>Daftar Produk</h2>";

$p1->tampilProduk();
$p2->tampilProduk();
$p3->tampilProduk();

echo "Total Produk: " . Produk::$jumlahProduk;

?>