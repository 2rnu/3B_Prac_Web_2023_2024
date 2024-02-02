<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
</body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $imie = $_GET['imie'];
    $nazwisko = $_GET['nazwisko'];
    
    echo $imie . $nazwisko;
}
?>
</html>