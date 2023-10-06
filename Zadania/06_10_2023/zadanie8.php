
<!DOCTYPE html>

<body>
    <?php

$liczba1 = 23;
$liczba2 = 12;
$liczba3 = 12;

if ($liczba1 == $liczba2 && $liczba2 == $liczba3) {
    echo "Wszystkie liczby są sobie równe."; }
    elseif ($liczba1 == $liczba2) {
        echo "Liczba(1) $liczba1 jest równa liczbie(2) $liczba2."; }
        elseif ($liczba1 == $liczba3) {
            echo "Liczba(1) $liczba1 jest równa liczbie(3) $liczbie3."; }
            elseif ($liczba2 == $liczba3) {
                echo "Liczba(2) $liczba2 jest równa liczbie(3) $liczba3."; }
    ?>
</body>

</html>