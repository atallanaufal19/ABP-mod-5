<!DOCTYPE html>
<html lang="en">
<head>
    <title>BMI Score</title>
</head>
<body>
    <?php
        function hitungBMI($berat, $tinggi) {
            $bmi = $berat / ($tinggi * $tinggi);
            return round($bmi, 2);
        }
        $berat = 65;
        $tinggi = 1.7; 
        $bmi = hitungBMI($berat, $tinggi);
        echo "Berat : $berat kg<br>";
        echo "Tinggi : $tinggi m<br>";
        echo "BMI anda adalah: $bmi <br>";

        if ($bmi <= 18.5){
            echo "Anda kekurangan berat badan <br>";
        }elseif ($bmi > 18.5 And $bmi < 23 ){
            echo "selamat berat badan anda ideal <br>";
        }elseif ($bmi >= 25){
            echo "Anda obesitas <br>";
        }else {
            echo "Anda kelebihan berat badan <br>";
        }
    ?>
</body>
</html>