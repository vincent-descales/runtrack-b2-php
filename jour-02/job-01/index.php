<?php


// Souvent on identifie cet objet par la variable $conn ou $db

$db = new PDO(
    'mysql:host=localhost;dbname=lp_official;charset=utf8',
    'root',
    'password'
);

echo 'cc';

$recupStudents = $db->prepare('SELECT * FROM student'); 
$recupStudents->execute();
$tabPhp = $recupStudents->fetchAll();
var_dump('cc',$tabPhp);

    

?>