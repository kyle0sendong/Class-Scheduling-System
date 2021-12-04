<?php 

try {

    include __DIR__ . './includes/connection/DatabaseConnect.php';
    include __DIR__ . './includes/connection/DatabaseFunctions.php';
    
    if(isset($_POST['newEntry'])) {


        header('Location: schedules.php');
    }

    if(isset($_POST['updateEntry'])) {


        header('Location: schedules.php');
    }

    if(isset($_POST['deleteEntry'])) {
        
        header('Location: schedules.php');
    }

    //if view subjects, redirect

    
    include __DIR__ . './includes/templates/schedules.html.php';
    
} catch (PDOException $e) {
    include __DIR__ . './includes/connection/displayError.php';
}

include __DIR__ . './includes/templates/layout.html.php';


?>

