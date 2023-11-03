<!DOCTYPE html>
<html>
<body>
<?php

$a = 2;
$b = 3;
$c = 1;

if ($a == $b && $b == $c)
    echo("Podany wymiaru wskazują na to, że trójkąt jest równoboczny.");
elseif ($a == $b || $a == $c || $c == $b)
    echo("Podane wymiary wskazują na to, że trójkąt jest równoramienny.");
elseif ($a != $b && $b != $c && $a != $c)
    echo("Podane wymiary wskazują na to, że trójkąt jest różnoboczny.");
else 
    echo("Musiałeś/aś podać złe dane.");

?>

</body>
</html>