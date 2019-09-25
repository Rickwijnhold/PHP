<?php
/**
 * Created by PhpStorm.
 * User: rickw
 * Date: 25/09/2019
 * Time: 08:43
 */

function LoginRick ()
{
    if ($_POST['inlognaam'] == "rick wijnhold") {
        echo "Welkom!";
    } else {
        echo "Jij bent geen Rick!";
    }
    if ($_POST['wachtwoord'] == "almere77") {
        echo "Welkom!";
    } else {
        echo "";
    }
}
        LoginRick();
