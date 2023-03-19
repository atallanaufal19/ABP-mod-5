<!DOCTYPE html>
<html lang="en">
<head>
    <title>array</title>
</head>
<body>
    <?php
        $nama = array('Tono', 'Toni', 'Tino', 'Tini');
        echo "Mengakses elemen array <br>";
        echo "anak pertama: " . $nama[0] . "<br>";
        echo "anak kedua: " . $nama[1] . "<br>";
        echo "anak ketiga: " . $nama[2] . "<br>";
        echo "anak keempat: " . $nama[3] . "<br>";

        echo "merubah elemen array <br>";
        $nama[1] = 'Toto';
        echo "anak kedua (setelah diubah): " . $nama[1];
        echo "<br>";

        echo "menambah elemen array <br>";
        $nama[] = 'Tintin';
        echo "anak kelima: " . $nama[4];
        echo "<br>";

        echo "menghapus elemen array <br>";
        unset($nama[3]);
        echo "Setelah menghapus anak keempat : ";
        foreach ($nama as $value) {
            echo "$value ";
        }
    ?>
</body>
</html>
