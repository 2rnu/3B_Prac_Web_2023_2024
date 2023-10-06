<!DOCTYPE html>

<body>
    <?php

    $year = 1700;

    if ($year % 4 == 0)
        if ($year % 100 == 0)
            if ($year % 400 == 0)
                echo "Jest to rok przestępny, więc luty ma 29 dni.";
            else {
                echo "Nie jest to rok przestępny, luty ma 28 dni.";
            }
    ?>
</body>

</html>