<link rel="stylesheet" type="text/css" href="css/scheduler.css">
<?php 

//Controller for scheduler.html.php
try {
    



    header('Location: scheduler.html.php');

} catch (PDOException $e) {
    include __DIR__ . '/../includes/connection/displayError.php';
}

include __DIR__ . '/../includes/templates/layout.html.php';

?>

