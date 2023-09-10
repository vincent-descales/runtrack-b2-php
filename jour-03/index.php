<?php

require_once './class/Student.php';
require_once './class/Grade.php';
require_once './class/Room.php';
require_once './class/Floor.php';

$student = new Student(1, 1, "email@email.com", "Terry Cristinelli", new DateTime("1990-01-18"), "male");

$student = new Student();

$room = new Room(1, 1, "RDC Food and Drinks", 90);

$room = new Room();

$floor = new Floor(1, "Rez-de-chaussée", 0);

$floor = new Floor();





?>