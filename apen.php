<?php
/**
 * Created by PhpStorm.
 * User: rickw
 * Date: 13/09/2019
 * Time: 12:52
 */
$apen = array("chimpansee", "oerang oetang", "gorilla", "neusaap");

$apen[4] = "mandril";
$apen[6] = "baviaan";
echo "<ul>";
foreach ($apen as $aap) {
    echo "<li>" . $aap . "</i>";
}
echo "</ul>";
