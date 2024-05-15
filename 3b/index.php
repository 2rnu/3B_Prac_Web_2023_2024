<?php
$cookie_name = "user";
$cookie_value = "main_cookie";
setcookie($cookie_name, $cookie_value, time() + (1440 * 7), "/");
?>
<!DOCTYPE html>
<html lang="eng">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styl6.css">
    <title>Odloty samolotów</title>
</head>
<body>
    <div id="first_block_banner">
        <h2>Odloty z lotniska</h2>
    </div>

    <div id="second_block_banner">
        <img src="zad6-z.png" alt="logotyp">
    </div>

    <div id="main_block">
        <h4>tabela odlotów</h4>
        
        <table>
            <tr>
                <th>L.P</th> <th>NUMER REJSU</th> <th>CZAS</th> <th>KIERUNEK</th> <th>STATUS</th>
            <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $db = "egzamin";

                $conn = new mysqli($servername, $username, $password, $db);
                if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
                }

                $sql = "SELECT id, nr_rejsu, samoloty_id, kierunek, czas, status_lotu FROM odloty Order By czas desc";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr><td>" . $row["id"]. " </td><td> " . $row["nr_rejsu"]. " </td><td> " . $row["samoloty_id"]. "</td><td>" . $row["kierunek"]. "</td><td>" . $row["czas"]. "</td><td>" . $row["status_lotu"]. "</td></tr>";
                }
                } else {
                echo "0 results";
                }
                $conn->close();
                ?>
         </table>
    </div>

    <div id="first_footer">
        <a href="kw1.png" target = '_blank'> Pobierz obraz </a>
    </div>

    <div id="second_footer">
    <p> <?php
    if(!isset($_COOKIE[$cookie_name])) {
    echo "Dzień dobry! Sprawdż nasz regulamin.";
    } else {
    echo "Miło nam, że nas znowu odwiedziłeś";
    }
    ?> </p>
    </div>

    <div id="third_footer">
        Autor:gabriel achler
    </div>
</body>


</html>