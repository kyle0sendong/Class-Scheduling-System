
<?php 

try {
    include __DIR__ . './includes/connection/DatabaseConnect.php';
    include __DIR__ . './includes/connection/DatabaseFunctions.php';
    
    //if set add new teacher
    if(isset($_POST['firstName'])) {

        insert($pdo, 'teacher', 
            ['firstName' => $_POST['firstName'],
             'lastName' => $_POST['lastName']]
        );

        header('Location: teacher.php');
    }

    //if edit teacher

    //if delete teacher

    //if view subjects, redirect


    //if view teacher
    
   
    
    include __DIR__ . './includes/templates/teacher.html.php';

} catch (PDOException $e) {
    include __DIR__ . './includes/connection/displayError.php';
}

include __DIR__ . './includes/templates/layout.html.php';


?>

