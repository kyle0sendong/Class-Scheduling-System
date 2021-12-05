<?php 

try {

    include __DIR__ . './includes/connection/DatabaseConnect.php';
    include __DIR__ . './includes/connection/DatabaseFunctions.php';
    
    if(isset($_POST['newEntry'])) {


        header('Location: scheduler.php');
    }

    if(isset($_POST['updateEntry'])) {


        header('Location: scheduler.php');
    }

    if(isset($_POST['deleteEntry'])) {
        
        header('Location: scheduler.php');
    }

    //if view subjects, redirect

    
    include __DIR__ . './includes/templates/schedulercopy.html.php';
    
} catch (PDOException $e) {
    include __DIR__ . './includes/connection/displayError.php';
}

include __DIR__ . './includes/templates/layout.html.php';


?>

