<?php

require_once './Database.php';
require_once './DatabaseAgregation.php';

$conn=new Database();
$conn->dbConnect();
$pdo=$conn->getPdo();

$test=new PDO('mysql:host=localhost;dbname=library_db', 'root', '');
$agregation= new DatabaseAgregation($test);
$agregation->getPdo();