<?php 

try {

    include __DIR__ . './includes/connection/DatabaseConnect.php';
    include __DIR__ . './includes/connection/DatabaseFunctions.php';
    


    //if view subjects, redirect
    
    if(isset($_GET['search'])) {

        $dept = $_GET['search'];
        include __DIR__ . './includes/templates/teacher.html.php';

        if(isset($_POST['firstName'])) {

            $teachFirstName = $_POST['firstName'];
            $teachLastName = $_POST['lastName'];
            $teachDept = $_POST['dept'];
            $teachAdvising = $_POST['advising'];

            $parameters = [
                'firstName' => $teachFirstName,
                'lastName' => $teachLastName,
                'dept' => $teachDept,
            ];

            //if new entry
            if(isset($_POST['newEntry'])) {

                insert($pdo, 'teacher', $parameters);
                $last = $pdo->lastInsertId();   //update adviser table
                updateAdviser($pdo, $last, $teachAdvising);
            }

            //if update entry
            if(isset($_POST['updateEntry'])) {
                
                $teachId = $_POST['id'];
                $parameters['id'] = $teachId;
                update($pdo, 'teacher', 'id', $parameters);
                updateAdviser($pdo, $teachId, $teachAdvising);
            }

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


function updateAdviser($pdo, $teacherId, $gradesectionId) {

    update($pdo, 'adviser', 'gradesection_id', [
        'teacher_id' => $teacherId,
        'gradesection_id' => $gradesectionId
    ]);
}

?>

