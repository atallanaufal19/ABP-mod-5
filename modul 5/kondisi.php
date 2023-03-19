<!DOCTYPE html>
<html>
<head>
    <title>kondisi</title>
</head>
<body>
    <?php
        $bmi = 23.7;
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
