<?php

class Matematika {

    public static function kali($a, $b) {
        return $a * $b;
    }

    public static function bagi($a, $b) {
        return $a / $b;
    }

    public static function tambah($a, $b) {
        return $a + $b;
    }

    public static function kurang($a, $b) {
        return $a - $b;
    }

    public static function luasPersegi($sisi) {
        return $sisi * $sisi;
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Praktikum 2 - Static Method</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 30px;
        }

        .container {
            width: 600px;
            margin: auto;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px gray;
        }

        h2 {
            color: purple;
        }

        .hasil {
            margin-top: 20px;
            padding: 15px;
            background-color: #f8d7f0;
            border-left: 5px solid purple;
        }

        input, button {
            padding: 8px;
            margin-top: 10px;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Praktikum 2 - Static Method</h2>

    <div class="hasil">
        <?php
        echo "Perkalian 4 x 5 = " . Matematika::kali(4, 5);
        echo "<br>";

        echo "Pembagian 10 / 2 = " . Matematika::bagi(10, 2);
        echo "<br>";

        echo "Penjumlahan 8 + 2 = " . Matematika::tambah(8, 2);
        echo "<br>";

        echo "Pengurangan 10 - 3 = " . Matematika::kurang(10, 3);
        ?>
    </div>

    <br>

    <form method="post">
        <label>Masukkan sisi persegi:</label><br>
        <input type="number" name="sisi" required>
        <button type="submit">Hitung</button>
    </form>

    <?php
    if (isset($_POST['sisi'])) {
        $sisi = $_POST['sisi'];
        $luas = Matematika::luasPersegi($sisi);

        echo "<div class='hasil'>";
        echo "Luas persegi dengan sisi $sisi adalah $luas";
        echo "</div>";
    }
    ?>
</div>

</body>
</html>