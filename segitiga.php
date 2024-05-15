<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Segitiga Ketupat</title>
</head>

<body>
    <pre>
<?php
$tinggi = 5;

// Segitiga atas
for ($i = 1; $i <= $tinggi; $i++) {
    for ($j = $tinggi; $j > $i; $j--) {
        echo " ";
    }
    for ($k = 1; $k <= $i; $k++) {
        echo $k;
    }
    for ($l = $i - 1; $l >= 1; $l--) {
        echo $l;
    }
    echo "\n";
}

// Segitiga bawah
for ($i = $tinggi - 1; $i >= 1; $i--) {
    for ($j = $tinggi; $j > $i; $j--) {
        echo " ";
    }
    for ($k = 1; $k <= $i; $k++) {
        echo $k;
    }
    for ($l = $i - 1; $l >= 1; $l--) {
        echo $l;
    }
    echo "\n";
}
?>
    </pre>
</body>

</html>