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
        }


        header('Location: scheduler.php?grade_section=' . $grade_section);
    }

    
    include __DIR__ . './includes/templates/scheduler.html.php';
    
} catch (PDOException $e) {
    include __DIR__ . './includes/connection/displayError.php';
}

include __DIR__ . './includes/templates/layout.html.php';


?>

