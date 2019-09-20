<?php
/**
 * Created by PhpStorm.
 * User: rickw
 * Date: 18/09/2019
 * Time: 12:49
 */
//print_r($_POST);

//echo "<img src='img/apen/".$_POST['apen'].".jpg'>";

print_r($_POST['apen']);

foreach ($_POST['apen'] as $aap) {
    echo "<img src='img/apen/".$aap.".jpg'>";
}