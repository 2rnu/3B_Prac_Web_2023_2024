<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    

    echo "Pętla for: <br>";
    for ($i=101; $i > 0; $i--) { 
        echo $i . '<br>';
    }
    
    echo "Pętla while: <br>";
    $a = 100;
    while ($a > 0) {
        echo $a . '<br>';
        $a--;
    }
    
    echo "Pętla do ... while: <br>";
    $g = 100;
    do {
        echo $g . '<br>';
        $g--;
    } while ($g > 0);

?>
</body>
</html>