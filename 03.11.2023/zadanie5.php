<!DOCTYPE html>
<html>
<body>
<?php

$percent = 1;

if ($percent <= 1.0 && $percent >= 0.96)
   echo("Twój wynik procentowy mówi, że dostałeś ocenę celującą");
   elseif ($percent <= 0.95 && $percent >= 0.90) {
   echo("Twój wynik procentowy mówi, że dostałeś ocenę bardzo dobrą"); }
   elseif ($percent <= 0.89 && $percent >= 0.73) {
   echo("Twój wynik procentowy mówi, że dostałeś ocenę dobrą"); }
   elseif ($percent <= 0.72 && $percent >= 0.50) {
   echo("Twój wynik procentowy mówi, że dostałeś ocenę dostateczną"); }
   elseif ($percent <= 0.49 && $percent >= 0.30) {
   echo("Twój wynik procentowy mówi, że dostałeś ocenę dopuszczającą"); }
   else
    echo("Twój wynik procentowy mówi, że dostałeś ocenę niedostateczną");

?>

</body>
</html>