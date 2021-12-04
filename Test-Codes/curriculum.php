<?php 

try {

    include __DIR__ . './includes/connection/DatabaseConnect.php';
    include __DIR__ . './includes/connection/DatabaseFunctions.php';
    
    if(isset($_POST['newEntry'])) {


        header('Location: curriculum.php');
    }

    if(isset($_POST['updateEntry'])) {


        header('Location: curriculum.php');
    }

    if(isset($_POST['deleteEntry'])) {
        

        header('Location: curriculum.php');
    }

    //if view subjects, redirect

    
    include __DIR__ . './includes/templates/curriculum.html.php';
    
} catch (PDOException $e) {
    include __DIR__ . './includes/connection/displayError.php';
}

include __DIR__ . './includes/templates/layout.html.php';


?>