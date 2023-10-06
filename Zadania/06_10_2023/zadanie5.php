<!DOCTYPE html>
<body>
<?php

$liczba1 = 120;

if($liczba1 < 11) {
    echo "Dziecko"; }
else if($liczba1 >= 11 && $liczba1 <= 17) {
    echo "Nastolatek"; }
else if ($liczba1 > 18 && $liczba1 < 100) {
    echo "Dorosły"; }
else { echo "Podano zły wiek lub osoba ma więcej niż 100 lat"; }
?>
</body>
</html>
