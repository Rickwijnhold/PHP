<?php
/**
 * Created by PhpStorm.
 * User: rickw
 * Date: 16/09/2019
 * Time: 13:55
 */
?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP 4 hoofdstuk</title>
    <style>

    </style>
</head>
<body>
<ul>
    <?php
    $dieren = array("aap" , "beer" , "konijn" , "vijs");
    $sporten = array("voetbal" , "korfbal" , "handbal" , "basketbal");
    shuffle($sporten);
    echo "<li>Er zijn ".count($sporten)." sporten in de array</li>";

    geefArrayWeerAlsLijst($sporten);
    geefArrayWeerAlsLijst($dieren);

    function geefArrayWeerAlsLijst($arr) {
        foreach ($arr as $arr_element) {
            echo "<li>" . $arr_element . "</li>";
        }
    }
    ?>
</ul>
</body>
</html>
