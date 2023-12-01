<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$startNumber = 100;
$counter = 0;

echo "Pętla for: <br>";
for ($i = 0; $i < 5; $i++) { 
    echo $startNumber . " <br>";
    $startNumber += 5;
}

echo "Pętla while: <br>";
while ($counter < 5) {
    if ($startNumber % 5 == 0) {
        echo $startNumber . " <br>";
        $startNumber += 5;
        $counter++;
    }
}

?>
</body>
</html>