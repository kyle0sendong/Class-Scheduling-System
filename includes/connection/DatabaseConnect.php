<?php 
//Using PDO mysql

$pdo = new PDO('mysql:host=localhost;dbname=schedule;
    charset=utf8', 'root', '');
    
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?> 