<?php 

try {

    include __DIR__ . './includes/connection/DatabaseConnect.php';
    include __DIR__ . './includes/connection/DatabaseFunctions.php';
    
    if(isset($_POST['saveSchedule'])) {
        $grade_section = $_POST['grade_section'];
        $teacher_id = $_POST['teacher'];
        $subject = $_POST['subject'];
        $day = $_POST['day'];
        $duration = $_POST['duration'];
        $startTime = $_POST['start_time'] + $_POST['start_time_add'];
        $endTime = $startTime + $duration;

        /* Retrieve id of the grade and section to add workload */
        $grade = $grade_section;
        $section = substr($grade, -1);
        $grade = substr_replace($grade ,"", -1);
        $grade = retrieveTwoId($pdo, 'grade_level', 'grade', $grade, 'section', $section);

        for($i = 0; $i < count($day); $i++) {
            $parameters = [
                'grade_section' => $grade_section,
                'teacher_id' => $teacher_id,
                'subject' => $subject,
                'day' => $day[$i],
                'start_time' => $startTime,
                'end_time' => $endTime,
                'duration' => $duration
            ];

            insert($pdo, 'class_schedule', $parameters);
            updateWorkload($pdo, 'insert', 'teacher', $teacher_id, $duration);
            updateWorkload($pdo, 'insert', 'grade_level', $grade['id'], $duration);
        }


        header('Location: scheduler.php?grade_section=' . $grade_section);
    }

    if(isset($_POST['deleteSchedule'])) {
        $id = $_POST['deleteSchedule'];
        $teacher_id = $_POST['teacher_id'];
        $grade_section = $_POST['grade_section'];
        $duration = $_POST['duration'];

        /* Retrieve id of the grade and section to remove workload */
        $grade = $grade_section;
        $section = substr($grade, -1);
        $grade = substr_replace($grade ,"", -1);
        $grade = retrieveTwoId($pdo, 'grade_level', 'grade', $grade, 'section', $section);

        delete($pdo, 'class_schedule', $_POST['deleteSchedule']);
        updateWorkload($pdo, 'delete', 'teacher', $teacher_id, $duration);
        updateWorkload($pdo, 'delete', 'grade_level', $grade['id'], $duration);

        header('Location: scheduler.php?grade_section=' . $grade_section);
    }
    
    include __DIR__ . './includes/templates/scheduler.html.php';
    
} catch (PDOException $e) {
    include __DIR__ . './includes/connection/displayError.php';
}

include __DIR__ . './includes/templates/layout.html.php';



?>

