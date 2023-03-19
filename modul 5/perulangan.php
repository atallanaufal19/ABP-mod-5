<!DOCTYPE html>
<html lang="en">
<head>
    <title>Perulangan</title>
</head>
<body>
    <?php
        $rows = 7;
        for ($i = $rows; $i >= 1; $i--) {
            for ($j = 1; $j <= $i; $j++) {
                echo "*";
            }
            echo "<br>";
        }
    ?>
</body>
</html>
<?php

