<!DOCTYPE html>
<html lang="en">
<head>
    <title>xml</title>
</head>
<body>
    <?php
        // Load file XML
        $xml = simplexml_load_file("data.xml") or die("Error: Cannot create object");

        // Loop through XML data
        foreach($xml as $Netflix) {
            echo "jenis : " . $Netflix['jenis'] . "<br>";
            echo "judul : " . $Netflix->judul . "<br>";
            echo "sutradara : " . $Netflix->sutradara . "<br>";
            echo "tahun : " . $Netflix->tahun . "<br>";
            echo "rating : " . $Netflix->rating . "<br><br>";
        }
    ?>
</body>
</html>