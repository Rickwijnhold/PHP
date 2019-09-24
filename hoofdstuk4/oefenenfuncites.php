<?php
/**
 * Created by PhpStorm.
 * User: rickw
 * Date: 20/09/2019
 * Time: 11:14
 */
$dieren = array("apen", "vis", "reptielen" , "blablabla");
$sporten = array("voetbal", "handbal", "korfbal","basketbal");
shuffle($sporten);
echo "<li>Er zijn ".count($sporten)." sporten in de array</li>";

geefArrayWeerAlsLijst($sporten);
geefArrayWeerAlsLijst($dieren);
 function geefArrayWeerAlsLijst($arr)
 {
     foreach ($arr as $arr_element) {
         echo "<li>" . $arr_element . "</li>";
     }
 }


    function telop() {
         $a = 5;
         $b = 8;
         $c = $a + $b;

         echo $a. "+" .$b. " = ".$c;
 }