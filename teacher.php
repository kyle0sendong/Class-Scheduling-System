<?php 

try {

    include __DIR__ . './includes/connection/DatabaseConnect.php';
    include __DIR__ . './includes/connection/DatabaseFunctions.php';
    
    //if view subjects, redirect
    
    if(isset($_GET['search']) || isset($_GET['dept'])) {

        $dept;
        $search;

        if(isset($_GET['dept']))
            $dept = $_GET['dept'];
        else 
            $search = $_GET['search'];
        
        
        include __DIR__ . './includes/templates/teacher.html.php';

        //new teacher or update a teacher
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
                $parameters['workload'] = 0;
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

            $dept = $_POST['dept']; //set the new 
            header('Location: teacher.php?dept=' . $dept);
        }

        if(isset($_POST['deleteEntry'])) {

            delete($pdo, 'teacher', $_POST['id']);

            if(isset($_GET['dept']))
                header('Location: teacher.php?dept=' . $dept);
            else 
                header('Location: teacher.php?search=' . $search);
        }
    }
    
    
} catch (PDOException $e) {
    include __DIR__ . './includes/connection/displayError.php';
}

include __DIR__ . './includes/templates/layout.html.php';


function updateAdviser($pdo, $teacherId, $gradesectionId) {

    update($pdo, 'grade_level', 'id', [
        'adviser_id' => $teacherId,
        'id' => $gradesectionId
    ]);
}

?>

