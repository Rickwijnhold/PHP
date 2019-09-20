<?php
/**
 * Created by PhpStorm.
 * User: rickw
 * Date: 18/09/2019
 * Time: 13:47
 */

$user = "schooluser";
$pass = "almere77!";

try {
    $dbh = new PDO('mysql:host=localhost;dbname=school;port=8889', $user, $pass);
    foreach($dbh->query('SELECT * from cursist') as $row) {
        print_r($row);
    }
    $dbh = null;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>