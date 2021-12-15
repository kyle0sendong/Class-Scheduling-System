<link rel="stylesheet" type="text/css" href="./includes/templates/css/scheduler.css">

<?php 

$title = 'Teacher Schedule';

$teacher_id = $_GET['id'];
$teacher = retrieveId($pdo, 'teacher', 'id', $teacher_id);
$teacherName = $teacher['firstName'] . ' ' . $teacher['lastName'];
/*     DISPLAY TIME TABLE     */ 
$output = '
<div class="text" style="height: 400px; width: 800px; margin-left: 5%;">
  <h2 id="schedule-heading" style="margin-left: 15%; padding-top: 20px;">'.$teacherName.' Schedule</h2>
  <div class="schedule" aria-labelledby="schedule-heading">
    
    <span class="track-slot" aria-hidden="true" style="grid-column: mon; grid-row: tracks;">Monday</span>
    <span class="track-slot" aria-hidden="true" style="grid-column: tue; grid-row: tracks;">Tuesday</span>
    <span class="track-slot" aria-hidden="true" style="grid-column: wed; grid-row: tracks;">Wednesday</span>
    <span class="track-slot" aria-hidden="true" style="grid-column: thu; grid-row: tracks;">Thursday</span>
    <span class="track-slot" aria-hidden="true" style="grid-column: fri; grid-row: tracks;">Friday</span>
    
    <h2 class="time-slot" style="grid-row: time-700;">7:00am</h2>
    <h2 class="time-slot" style="grid-row: time-750;"></h2>
    <h2 class="time-slot" style="grid-row: time-800;">8:00am</h2>
    <h2 class="time-slot" style="grid-row: time-850;"></h2>
    <h2 class="time-slot" style="grid-row: time-900;">9:00am</h2>
    <h2 class="time-slot" style="grid-row: time-950;"</h2>
    <h2 class="time-slot" style="grid-row: time-1000;">10:00am</h2>
    <h2 class="time-slot" style="grid-row: time-1050;"></h2>
    <h2 class="time-slot" style="grid-row: time-1100;">11:00am</h2>
    <h2 class="time-slot" style="grid-row: time-1150;"></h2>
    <h2 class="time-slot" style="grid-row: time-1200;">12:00pm</h2>
    <h2 class="time-slot" style="grid-row: time-1250;"></h2>
    <h2 class="time-slot" style="grid-row: time-1300;">1:00pm</h2>
    <h2 class="time-slot" style="grid-row: time-1350;"></h2>
    <h2 class="time-slot" style="grid-row: time-1400;">2:00pm</h2>
    <h2 class="time-slot" style="grid-row: time-1450;"></h2>
    <h2 class="time-slot" style="grid-row: time-1500;">3:00pm</h2>
    <h2 class="time-slot" style="grid-row: time-1550;"></h2>
    <h2 class="time-slot" style="grid-row: time-1600;">4:00pm</h2>
    <h2 class="time-slot" style="grid-row: time-1650;"></h2>
    <h2 class="time-slot" style="grid-row: time-1700;">5:00pm</h2> 
';


  //For retrieving all data from the grade and section selected (will be displayed later)
    $teacher_sched = retrieveAllId($pdo, 'class_schedule', 'teacher_id', $teacher_id);
    $teacher_sched_exist = true;

    if(!isset($teacher_sched_exist))
        $teacher_sched_exist = false;
    
    foreach($teacher_sched as $sched) {

        $schedDay = $sched['day'];
        $schedStart = $sched['start_time'];
        $schedEnd = $sched['end_time'];
        $schedSection = $sched['grade_section'];

        $isStart45 = false;
        $isEnd45 = false;
        if(($schedStart-25) % 50 == 0) {  //if it is a 45 minute
          $schedStart -= 25;
          $isStart45 = true;
        }
        if(($schedEnd-25) % 50 == 0) { // if it is a 45 minute
          $schedEnd -= 25;
          $isEnd45 = true;
        }

        $output .= '

        <div class="session English" style="grid-column: '.$schedDay.'; grid-row: time-'.$schedStart.' / time-'.$schedEnd.';"> 
        ';
            //check again if sched start/end is a 45 minute then add 25 
        if($isStart45)  
          $schedStart += 25;
        if($isEnd45)
          $schedEnd += 25;

        $output .= '
            <div class="session-time Filipino">
                <div>'.convertTime($schedStart).' - '.convertTime($schedEnd) . ' <u>' .$schedSection.'</u></div>
            </div>

            <div>
              <a href="scheduler.php?grade_section='.$schedSection.'&subject='.$_GET['dept'].'#main" class ="btn btn-primary" target="_blank" style="font-size:11; margin: 1%;">Edit Schedule</a>
            </div> 
        </div>
        ';
    }

  $output .= '
  </div>
</div>
  ';

?>
