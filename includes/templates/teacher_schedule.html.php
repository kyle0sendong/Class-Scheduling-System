<link rel="stylesheet" type="text/css" href="./includes/templates/css/scheduler.css">

<?php 

/*     DISPLAY TIME TABLE     */ 
$output .= '
<div class="text">
  <h2 id="schedule-heading" style="margin-left: 15%; padding-top: 20px;">Teacher name</h2>
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
  $grade_section_sched = retrieveAllId($pdo, 'class_schedule', 'grade_section', $gradeSection);

  foreach($grade_section_sched as $sched) {

    $output .= '

    <div class="session " style="grid-column: mon; grid-row: time-700 / time-900;">
        <div class="session-time">
            <div>'.convertTime($schedStart).' - '.convertTime($schedEnd) . ' ' . convertSubject($schedSubject).'</div>

            <!-- FORM FOR THE DELETE BUTTON -->
            <div> 
            <form action="scheduler.php" method="post" style="display:inline-block; margin:0; padding:0;">
                <input type="hidden" name="teacher_id" value="'.$teacher['id'].'">
                <input type="hidden" name="grade_section" value="'.$gradeSection.'">
                <input type="hidden" name="duration" value="'.$sched['duration'].'">
                <button type="submit" name="deleteSchedule" value="'.$sched['id'].'">X</button> 
            </form>
            </div>
        </div>

        <div class="session-track">
            <div>'.$schedTeacher.'</div>
        </div>
    </div>
    ';
  }

  $output .= '
  </div>
</div>
  ';

?>
