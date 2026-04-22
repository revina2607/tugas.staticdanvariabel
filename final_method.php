<?php
class Kendaraan {
    final public function mesin() {
        echo "Mesin standar";
    }
}
class Mobil extends Kendaraan {
    public function jalan() {
        echo "Mobil sedang berjalan";
    }
}
$mobil = new Mobil();
$mobil->mesin();
echo "<br>";
$mobil->jalan();
?>