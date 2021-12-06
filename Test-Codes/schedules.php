<?php 

try {

    include __DIR__ . './includes/connection/DatabaseConnect.php';
    include __DIR__ . './includes/connection/DatabaseFunctions.php';
    
    if(isset($_POST['newEntry'])) {

        $parameters = [
            'grade' => $_POST['grade'],
            'section' => $_POST['section'],
        ];

        insert($pdo, 'grade_level', $parameters);

        $last = $pdo->lastInsertId(); //take the id of the new row and put on adviser table
        insert($pdo, 'adviser', [
            'gradesection_id' => $last,
            'teacher_id' => $_POST['adviser']
        ]);

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

