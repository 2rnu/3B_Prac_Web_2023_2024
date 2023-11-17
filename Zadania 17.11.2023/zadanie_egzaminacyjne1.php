<!Doctype html>
<html lang="pl">
<title>
    kalkulator
</title>
<head>
    <h1>Kalkulator</h1>
</head>
<body>
    <li>
        Euro kurs 4.32
    </li>
    <li>
        Dolar kurs 3.31
    </li>
    <li>
        Frank kurs 3.98
    </li>
    <br>
<?php
    $pl = 78;
    $i = 'Euro'; //Euro, Dolar, Frank

    echo "Podana kwota ----  $pl <br><br>";

    switch ($i)
    {
        case 'Euro':
            echo("Po przewalutowaniu na ".$i. $pl * 4.32);
            break;
        case 'Dolar':
            echo("Po przewalutowaniu na ".$i. $pl * 3.21);
            break;
        case 'Frank':
            echo("Po przewalutowaniu na ".$i. $pl * 3.98);
            break;
    }
?>

</body>
</html>