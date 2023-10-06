<?php
echo "Hello!" . "<br>";
print "Text" . "<br>";
$txt = "kielbasy.";
echo "Nie lubie $txt" . "<br>";

$number = 5;
echo $number;

$number = 6;
$Numberr = 7;

echo $number;
echo $Numberr . "<br>";

define("IMIE", "Mateusz");
define("NAZWA", "MAREK");
print(NAZWA . "<br>");
print("Imie: " . IMIE . "<br>");

#
//
/*
 */

$color = "red";
$COLOR = "brown";
$coLOR = "piss yellow";
echo "My car is " . $color . "<br>";
echo "My house is " . $COLOR . "<br>";
echo "My boat is " . $coLOR . "<br>";

//Nie wyświetlą się, są uznawane za inne wartości, przypisano do $color kolor czerwony, $COLOR oraz $coLOR nie mają przypisanej wartośći

" ";
' ';

$x = 2;
$y = 3;

if ($y > $x)
    echo "Liczba x jest wieksza od liczby y" . "<br>";


$z = $x + $y;

if ($x < 0)
    echo "Wartosc zmiennej z jest mniejsza od 0. " . "<br>";
elseif ($z < 10)
    echo "Wartosc zmiennej z jest zawarta w zakresie od 0 do 10. " . "<br>";
elseif ($x < 20)
    echo "Wartosc zmiennej z jest zawarta w zakresie od 0 do 20. " . "<br>";
elseif ($x < 30)
    echo "Wartosc zmiennej z jest zawarta w zakresie od 0 do 30. " . "<br>";
else
    echo "Wartosc zmiennej z jest wieksza od 30." . "<br>";

$kolor = "red";

switch ($kolor) {
    case 'red':
        echo "Dominujacym kolorem jest czerwien. ";
        break;
    case 'green':
        echo "Dominujacym kolorem jest zielen. ";
        break;
    case 'piss yellow':
        echo "Dominujacym kolorem jest zolc z odcieniu moczu. ";
        break;
    case 'black':
        echo "Dominujacym kolorem jest czern. ";
        break;
    default:
        echo "Dominujacego koloru nie ma";
        break;
}
function myTest() {
    $x = 5; // jedynie w funkcji
    echo "<p>Zmienna x wewnątrz funkcji to: $x</p>";

    $liczba1 = 144;
    $liczba2 = 56;

    $wynik = $liczba1 + $liczba2;

    echo "Wynik dodawania dwóch liczb to: $wynik" . "<br>"; 
  }
  myTest();

?>