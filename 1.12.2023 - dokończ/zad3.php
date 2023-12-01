<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$startNumber = 1;

echo "Pętla for: <br>";
for ($i=1; $i < 11 ; $i++) { 
    echo $i . " " . "wartość liczby w pierwiastku: " . sqrt($i) . "<br>";
}

echo "<br>";
echo "Pętla while: <br>";
$a = 1;
while ($a <= 10) {
    echo $startNumber . " " . "wartość liczby w pierwiastku: " . sqrt($startNumber) . "<br>";
    $a++;
    $startNumber++;
}

echo "<br>";
echo "Pętla do ... while: <br>";
$d = 1;
$startNumber = 1;
do {
    echo $startNumber . " " . "wartość liczby w pierwiastku: " . sqrt($startNumber) . "<br>";
    $d++;
    $startNumber++;
} while ($d <= 10);


?>
</body>
</html>