<?php
include 'produk.php';

class Transaksi {

    final public function prosesTransaksi($produk, $jumlahBeli) {
        $total = $produk->harga * $jumlahBeli;

        echo "<hr>";
        echo "Produk Dibeli: " . $produk->namaProduk . "<br>";
        echo "Jumlah Beli: " . $jumlahBeli . "<br>";
        echo "Total Bayar: Rp " . number_format($total, 0, ',', '.');
    }
}

echo "<h2>Simulasi Transaksi</h2>";

$transaksi = new Transaksi();
$transaksi->prosesTransaksi($p1, 1);
$transaksi->prosesTransaksi($p2, 2);

?>