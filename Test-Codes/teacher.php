<?php 

try {

    include __DIR__ . './includes/connection/DatabaseConnect.php';
    include __DIR__ . './includes/connection/DatabaseFunctions.php';
    


    //if view subjects, redirect
    
    if(isset($_GET['dept'])) {

        $dept = $_GET['dept'];

        include __DIR__ . './includes/templates/teacher.html.php';

        if(isset($_POST['newEntry'])) {

            insert($pdo, 'teacher', 
                ['firstName' => $_POST['firstName'],
                 'lastName' => $_POST['lastName'],
                 'dept' => $_POST['dept']]
            );
    
            header('Location: teacher.php?dept=' . $dept);
        }
    
        if(isset($_POST['updateEntry'])) {
    
            update($pdo, 'teacher', 'id', 
                ['id' => $_POST['id'],
                'firstName' => $_POST['firstName'],
                'lastName' => $_POST['lastName'],
                'dept' => $_POST['dept']]
            );
    
            header('Location: teacher.php?dept=' . $dept);
        }
    
        if(isset($_POST['deleteEntry'])) {
            
            delete($pdo, 'teacher', $_POST['id']);
            
            header('Location: teacher.php?dept=' . $dept);
        }
        
    }
    
    
} catch (PDOException $e) {
    include __DIR__ . './includes/connection/displayError.php';
}

include __DIR__ . './includes/templates/layout.html.php';


?>

