<?php
/**
 * Created by PhpStorm.
 * User: rickw
 * Date: 18/09/2019
 * Time: 11:59
 */

if ($_POST['inlognaam'] == "") {
    echo "Je moet nog een naam invullen!";
    echo "<br><a href=\"formulier.html\">Terug naar het formulier</a>";
}

if ($_POST['adres'] == "") {
    echo "Je moet nog een adres invullen!";
    echo "<br><a href=\"formulier.html\">Terug naar het formulier</a>";
}

if ($_POST['email'] == "") {
    echo "Je moet nog een email invullen!";
    echo "<br><a href=\"formulier.html\">Terug naar het formulier</a>";
}

if ($_POST['wachtwoord'] == "") {
    echo "Je moet nog een wachtwoord invullen!";
    echo "<br><a href=\"formulier.html\">Terug naar het formulier</a>";
}

//$_POST['adres'];
//$_POST['email'];
//$_POST['wachtwoord'];