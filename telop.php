<?php
/**
 * Created by PhpStorm.
 * User: rickw
 * Date: 18/09/2019
 * Time: 11:48
 */
function telop( $a, $b) {
    $c = $a + $b;
    return $a. " + " .$b. " = ".$c;
}

echo telop(12,9);