<?php
// Define a multidimensional array
$mobil = array(
    array(
        "merk" => "Lamborghini",
        "series" => "Aventador",
        "warna" => "Hitam"
    ),
    array(
        "merk" => "Honda",
        "series" => "Civic",
        "warna" => "Pink",
    ),
    array(
        "merk" => "Mitsubishi",
        "series" => "Lancer",
        "warna" => "Silver",
    )
);
// Access nested value
echo "Mobil 1 : "  . $mobil[0]["merk"];
echo " " . $mobil[0]["series"];
echo " warna " .  $mobil[0]["warna"];
echo "<br>";

echo "Mobil 2 : "  . $mobil[1]["merk"];
echo " " . $mobil[1]["series"];
echo " warna " . $mobil[1]["warna"] ;
echo "<br>";

echo "Mobil 3 : "  . $mobil[2]["merk"] ;
echo " " . $mobil[2]["series"];
echo " warna "  . $mobil[2]["warna"];
?>