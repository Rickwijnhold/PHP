<?php
/**
 * Created by PhpStorm.
 * User: rickw
 * Date: 19/09/2019
 * Time: 11:41
 */


function CelsiusRekenen () {
    $celsius = 2;
    $fahrenheit = $celsius*1.8+32;

    echo $celsius ." graden celsius is ".$fahrenheit ." fahrenheit";
}
CelsiusRekenen();


function deeldrie () {
    $startgetal = 90;
    $som = $startgetal/3;
    if ($som == is_integer($som)) {
        echo "<br>$startgetal = deelbaar door drie<br>";
    }
}
deeldrie();

function Omgekeerde () {
    $tekst = "ben er helemaal klaar mee";


    echo strrev($tekst);
 //  for ($i=($lengte-1); $i >= 0; $i--){
 //      echo $tekst[$i];
//   }
}
Omgekeerde();