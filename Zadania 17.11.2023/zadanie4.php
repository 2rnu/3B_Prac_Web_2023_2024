<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Zadanie 2</title>
</head>
<body>
    <?php
    $liczba = 43;
    $liczba2 = 43;
    $liczba3 = 43;

    if ($liczba > $liczba2 && $liczba2 < $liczba3 && $liczba > $liczba3)
        echo "Liczba $liczba jest największa.";
       elseif ($liczba < $liczba2 && $liczba2 > $liczba3 && $liczba < $liczba3 ) {
            echo "Liczba $liczba2 jest największa."; }
            elseif ($liczba < $liczba2 && $liczba2 < $liczba3 && $liczba3 > $liczba) {
                echo "Liczba $liczba3 jest największa."; }
                elseif ($liczba == $liczba2 && $liczba2 !== $liczba3) {
                    echo "Liczba $liczba jest równa $liczba2."; }
                    elseif ($liczba !== $liczba2 && $liczba2 == $liczba3) {
                        echo "Liczba $liczba2 jest równa $liczba3."; }
                        elseif ($liczba == $liczba2 && $liczba2 == $liczba3) {
                            echo "Liczby są sobie równe $liczba = $liczba2 = $liczba3"; }

    
    ?>
</body>
</html>