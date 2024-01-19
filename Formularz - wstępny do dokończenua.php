<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    
<style>
    #p {
    font-weight: bold;
    font-size: 14pt;

    }

    #wyk {
    font-weight: bold;
    font-size: llpt;
    }
</style>

</head>

<body>

<form action="http://localhost/skrypt_form.php" method="post">

<p>Formularz kontaktowy:</p>

Nazwisko:<br>

<input type="text" name="nazw" value=" " size="30"><br>
Imie:<br>
<input type="text" name="im" value=" _" size="30"><br>

Zawod: <br>
<input type="text" name="zaw" value=" " size="30"><br>
Adres e-mail:<br>

<input type="text" name="adr" value=" _" size="30">

<p id="wyk">Wyksztatcenie:</p>

<input type="radio" value="podstawowe"

name="wykszt" checked> Podstawowe<br>
<input type="radio" value="Srednie" name="wykszt"> Srednie<br>

<input type="radio" value="wyzsze" name="wykszt"> Wyzsze<br><br>

<input type="checkbox" name="opcje" maxlength="1">

Zgadzam sie na przetwarzanie moich danych osobowych<br><br>
<input type="submit" value="WySlij" name="wyslij">&nbsp; énbsp;
<input type="reset" value="WyczySé" name="zeruj">

<form action="skrypt_forml.php" method="post">

Nazwisko i imie:<br>

<input type="text" name="nazw" value=" _" size="40"><br>

<p id="wyb">Wybor jezyka:</p>

<select name="jezyki[]" multiple>

<option value="Jezyk angielski">Jezyk angielski</option>

<option value="Jezyk niemiecki">Jezyk niemiecki</option>

<option value="Jezyk francuski">Jezyk francuski</option>

<option value="Jezyk wtoski">Jezyk wioski</option>

<option value="Jezyk rosyjski">Jezyk rosyjski</option>

<option value="Jezyk hiszpanski">Jezyk hiszpanski</option>

</select>

<p><input type="submit" value="Wyslij" name="wyslij"></p>

</form>
    
</body>
</html>