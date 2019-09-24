<?php
/**
 * Created by PhpStorm.
 * User: rickw
 * Date: 20/09/2019
 * Time: 11:33
 */

$vrienden = array ("chenney", "vishay", "anass", "sergen");
$vijanden = array("water", "cola", "spa rood");

Lijst($vrienden);
Lijst($vijanden);

function Lijst ($lijst) {
    foreach ($lijst as $lijst_element) {
        echo "<li>".$lijst_element."</li>";
    }
}


function telop($a, $b) {
    $c = $a + $b;

    echo $a. "+" .$b. " = ".$c;
}

telop(4,8);
