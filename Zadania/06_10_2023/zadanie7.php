<!DOCTYPE html>

<body>
    <?php

$liczba1 = 23;
$liczba2 = 12;
$liczba3 = 34;

$liczby = [$liczba1, $liczba2, $liczba3];
$najmniejsza = $liczby[0];

for ($i=1; $i < count($liczby) ; $i++) { 
    if ( $liczby[$i] < $najmniejsza) {
        $najmniejsza = $liczby[$i]; } }
        
        echo "Najmniejsza z liczb $liczba1, $liczba2, $liczba3 jest $najmniejsza.";
    ?>
</body>

</html>