<?php
/**
 * Created by PhpStorm.
 * User: rickw
 * Date: 18/09/2019
 * Time: 11:59
 */

if ($_POST['inlognaam'] == "") {
    echo "Je moet nog een naam invullen!";
    echo "<a href=\"formulier.html\">Terug naar het formulier</a><br>";
}

if ($_POST['adres'] == "") {
    echo "Je moet nog een adres invullen!";
    echo "<a href=\"formulier.html\">Terug naar het formulier</a><br>";
}

if ($_POST['email'] == "piet@worldonline.nl") {
    echo "Welkom";
}
    else {
        echo "Je moet nog een email invullen!";
        echo "<a href=\"formulier.html\">Terug naar het formulier</a><br>";
        echo "Geen toegang";
}

if ($_POST['wachtwoord'] == "doetje123") {
    }
   else {
       echo "Je moet nog een wachtwoord invullen!";
       echo "<a href=\"formulier.html\">Terug naar het formulier</a><br>";

}

//$_POST['adres'];
//$_POST['email'];
//$_POST['wachtwoord'];