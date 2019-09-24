
<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            text-align: center;
        }
    </style>
</head>
<body>


<?php
/**
 * Created by PhpStorm.
 * User: rickw
 * Date: 20/09/2019
 * Time: 09:58
 */

$clubs = array("De sparktelkuikens [25]","De waterbuffels [32]","Plonsmderin [11]","Bommetje [23]");
 foreach ($clubs as $club) {
     echo "<li>".$club."</li>";

}
 for ($i = 1; $i <= 5; $i++) {
     echo "<img src='img/zwem/zwem1.png'>";
 }
 ?>
</body>
</html>
