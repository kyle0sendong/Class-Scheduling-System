<?php 

try {

    include __DIR__ . './includes/connection/DatabaseConnect.php';
    include __DIR__ . './includes/connection/DatabaseFunctions.php';
    


    //if view subjects, redirect
    
    if(isset($_GET['search'])) {

        $dept = $_GET['search'];
        include __DIR__ . './includes/templates/teacher.html.php';

        if(isset($_POST['newEntry'])) {
            
            $parameters = [
                'firstName' => $_POST['firstName'],
                'lastName' => $_POST['lastName'],
                'dept' => $_POST['dept'],
            ];
            
            insert($pdo, 'teacher', $parameters);

            $last = $pdo->lastInsertId();
        
            update($pdo, 'adviser', 'gradesection_id', [
                'gradesection_id' => $_POST['advising'],
                'teacher_id' => $last
            ]);

            header('Location: teacher.php?search=' . $dept);
        }
    
        if(isset($_POST['updateEntry'])) {

            $parameters = [
                'id' => $_POST['id'],
                'firstName' => $_POST['firstName'],
                'lastName' => $_POST['lastName'],
                'dept' => $_POST['dept']
            ];

            update($pdo, 'teacher', 'id', $parameters);
            header('Location: teacher.php?search=' . $dept);
        }
    
        if(isset($_POST['deleteEntry'])) {
            
            delete($pdo, 'teacher', $_POST['id']);
            header('Location: teacher.php?search=' . $dept);
        }
        
    }
    
    
} catch (PDOException $e) {
    include __DIR__ . './includes/connection/displayError.php';
}

include __DIR__ . './includes/templates/layout.html.php';


?>

