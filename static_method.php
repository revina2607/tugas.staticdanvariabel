<?php
class Matematika {
    public static function tambah($a, $b) {
        return $a + $b;
    }
    public static function kurang($a, $b) {
        return $a - $b;
    }
}
echo "Hasil Tambah: " . Matematika::tambah(5, 3);
echo "<br>";
echo "Hasil Kurang: " . Matematika::kurang(10, 4);
?>
