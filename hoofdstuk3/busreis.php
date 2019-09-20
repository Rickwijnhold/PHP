<?php
/**
 * Created by PhpStorm.
 * User: rickw
 * Date: 16/09/2019
 * Time: 10:51
 */
?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP busreis</title>
    <style>

    </style>
</head>
<body>
<?php
$leeftijd = 12;
$bedrag = 10;
if ($leeftijd > 65) {
   $bedrag = $bedrag * 0.5;
}
if ($leeftijd <= 12) {
    $bedrag = $bedrag * 0.5;
}
if ($leeftijd < 3) {
    $bedrag = 0;
}

echo $bedrag;
?>
</body>
</html>
