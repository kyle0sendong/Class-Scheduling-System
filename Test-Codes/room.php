<?php 

try {

    include __DIR__ . './includes/connection/DatabaseConnect.php';
    include __DIR__ . './includes/connection/DatabaseFunctions.php';
    
    if(isset($_POST['newEntry'])) {


        header('Location: room.php');
    }

    if(isset($_POST['updateEntry'])) {


        header('Location: room.php');
    }

    if(isset($_POST['deleteEntry'])) {
        
        header('Location: room.php');
    }

    //if view subjects, redirect

    
    include __DIR__ . './includes/templates/room.html.php';
    
} catch (PDOException $e) {
    include __DIR__ . './includes/connection/displayError.php';
}

include __DIR__ . './includes/templates/layout.html.php';


?>

