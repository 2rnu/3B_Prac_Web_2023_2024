<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <td>ID</td>
            <td>Imię</td> 
            <td>Nazwisko</td>
            <td>Rok urodzenia</td>
            <td>Miejsce urodzenia</td>
            <td>Data urodzenia</td>
        </tr>
        <?php
            $host = "localhost";
            $user = "root";
            $pass = "";
            $db = "baza_filmow";
        
            $polaczenie = mysqli_connect($host, $user, $pass, $db);
        
            $zapytanie = "SELECT * from dane";
        
            $wynik = mysqli_query($polaczenie, $zapytanie);

        while ($row = mysqli_fetch_row($wynik)) {
            echo "<tr>";
            echo "<td>$row[0]</td>"; //$row['id'];
            echo "<td>$row[1]</td>";
            echo "<td>$row[2]</td>";
            echo "<td>$row[3]</td>";
            echo "<td>$row[4]</td>";
            echo "<td>$row[5]</td>";
            echo "<tr>";
        }
        ?>
    </table>
</body>
</html>