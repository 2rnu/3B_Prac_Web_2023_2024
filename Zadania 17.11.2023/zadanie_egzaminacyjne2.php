<!Doctype html>
<html lang="pl">
<title> Lang </title>

<head>
    <h1>Wybór języka</h1>
</head>

<body>
    Język podstawowy - Polski
    <br>
    do wyboru:
    <li> Angielski </li>
    <li> Niemiecki </li>
    <li> Hiszpański </li>
    <br>

    Wybrany język:

    <?php
    $jezyk = "h";

    if ($jezyk == "a")
        echo " Angielski";
    else if ($jezyk == "n")
        echo " Niemiecki";
    else if ($jezyk == "h")
        echo " Hiszpański";
    else
        echo "Polski";
    ?>

</body>

</html>