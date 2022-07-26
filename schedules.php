<?php 

try {

    include __DIR__ . './includes/connection/DatabaseConnect.php';
    include __DIR__ . './includes/connection/DatabaseFunctions.php';
    
    if(isset($_POST['newEntry'])) {

        $parameters = [
            'grade' => $_POST['grade'],
            'section' => $_POST['section'],
            'adviser_id' => $_POST['adviser'],
            'workload' => 0,
        ];

        insert($pdo, 'grade_level', $parameters);

        // $last = $pdo->lastInsertId(); //take the id of the new row and put on adviser table
        header('Location: schedules.php');
        
    }

    if(isset($_POST['deleteEntry'])) {
        delete($pdo, 'grade_level', $_POST['id']);
        header('Location: schedules.php');
    }

    //if view subjects, redirect

    
    include __DIR__ . './includes/templates/schedules.html.php';
    
} catch (PDOException $e) {
    include __DIR__ . './includes/connection/displayError.php';
}

include __DIR__ . './includes/templates/layout.html.php';


?>

