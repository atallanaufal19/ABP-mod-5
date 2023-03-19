<!DOCTYPE html>
<html>
<head>
	<title>POST</title>
</head>
<body>
    <form method="post">
        Berat(kg): <input type="text" name="berat"><br>
        Tinggi(m): <input type="text" name="tinggi"><br>
        <input type="submit" value="Hitung BMI">
    </form>
    <?php
        function hitungBMI($berat, $tinggi) {
            $bmi = $berat / ($tinggi * $tinggi);
            return round($bmi, 2);
        }
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $berat = isset($_POST['berat']) ? $_POST['berat'] : null;
            $tinggi = isset($_POST['tinggi']) ? $_POST['tinggi'] : null;

            if ($berat && $tinggi) {
                $bmi = hitungBMI($berat, $tinggi);
                echo 'BMI Anda adalah: ' . $bmi . "<br>";
                if ($bmi <= 18.5){
                    echo "Anda kekurangan berat badan <br>";
                }elseif ($bmi > 18.5 And $bmi < 23 ){
                    echo "selamat berat badan anda ideal <br>";
                }elseif ($bmi >= 25){
                    echo "Anda obesitas <br>";
                }else {
                    echo "Anda kelebihan berat badan <br>";
                }
            } else {
                echo 'Silahkan masukkan berat dan tinggi badan Anda.';
            }
        }   
    ?>

</body>
</html>
