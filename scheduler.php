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
            updateTeacherWorkload($pdo, 'insert', $teacher_id, $duration);

        }


        header('Location: scheduler.php?grade_section=' . $grade_section);
    }

    if(isset($_POST['deleteSchedule'])) {
        $id = $_POST['deleteSchedule'];
        $teacher_id = $_POST['teacher_id'];
        $grade_section = $_POST['grade_section'];
        $duration = $_POST['duration'];
        
        delete($pdo, 'class_schedule', $_POST['deleteSchedule']);
        updateTeacherWorkload($pdo, 'delete', $teacher_id, $duration);
        header('Location: scheduler.php?grade_section=' . $grade_section);
    }
    
    include __DIR__ . './includes/templates/scheduler.html.php';
    
} catch (PDOException $e) {
    include __DIR__ . './includes/connection/displayError.php';
}

include __DIR__ . './includes/templates/layout.html.php';

//custom function for scheduler page
function updateTeacherWorkload($pdo, $mode, $teacher_id, $duration) {
    $teacherWorkload = retrieveId($pdo, 'teacher', 'id', $teacher_id);

    if($mode == 'insert') 
        $teacherWorkload = ($duration/100) + $teacherWorkload['workload'];
    if($mode == 'delete') 
        $teacherWorkload = $teacherWorkload['workload'] - ($duration/100);

    update($pdo, 'teacher', 'id', [
        'id' => $teacher_id,
        'workload' => $teacherWorkload
    ]);
}

function retrieveTwoId($pdo, $table, $primaryKey1, $value1, $primaryKey2, $value2) {

    $query = 'SELECT * FROM `' . $table . '`
              WHERE `' . $primaryKey1 . '` = :value1
              AND `' . $primaryKey2 . '` = :value2 ';

    $parameters = [
        'value1' => $value1,
        'value2' => $value2
    ];

    $query = query($pdo, $query, $parameters);
    return $query->fetch();
}

function convertSubject($subject) {
    if($subject == 'Mathematics')
      return 'Math';
    if($subject == 'Filipino')
      return 'Fil';
      return $subject;
  
  }
  
function convertTime($time) {

    if($time % 100 == 0) {  //if it has no 30 minute time
        $time = $time/100;
        $stringTime;

        if($time > 12) {  //if it is an afternoon class
        
        $stringTime = ($time - 12) . ':00';
        return $stringTime;
        } else {

        $stringTime = $time . ':00';
        return $stringTime;
        }

    } else { //if it has a 30 minute time

        $stringTime;
        $time = $time/100;
        $time = $time - 0.5;

        if($time > 12) {  //if it is an afternoon class
        
        $stringTime = ($time - 12) . ':30';
        return $stringTime;
        } else {

        $stringTime = $time . ':30';
        return $stringTime;
        }

    }
}

?>

