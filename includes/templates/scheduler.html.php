<link rel="stylesheet" type="text/css" href="./includes/templates/css/scheduler.css">

<?php 

$title = 'Scheduler';
/*          ADD MODULE          */
  $output = '
<div style="display:flex;">
<div class="add-module">


<!-- Retrieving grade and section -->
  <div style="margin:20% 0 5% 0">
  <div class="dropdown">
  ';

  /* For display which grade and section is selected */
  $displayGradeSection;

  if(isset($_GET['grade_section'])) {

    $grade = $_GET['grade_section'];
    $section = substr($grade, -1);
    $grade = substr_replace($grade ,"", -1);
    $displayGradeSection = 'Grade ' . $grade . ' - ' . $section;
  }
  else  //if there is no grade and section selected yet
    $displayGradeSection = 'Select Grade and Section';
  
  $output .= '  
    <button onclick="dropDown('.'\'grade_section\''.')" class="dropbtn">'.$displayGradeSection.'</button>
    <div id="grade_section" class="dropdown-content">
  ';

  //retrieve grade and section and show them as clickable links
  for($i = 7; $i <= 10; $i++) {
    $gradeLevel = retrieveAllId($pdo, 'grade_level', 'grade', $i);
    foreach($gradeLevel as $row) {
      $output .= '
        <a href="scheduler.php?grade_section='.$row['grade'].$row['section'].'#main">
        Grade '.$row['grade'].' - ' .$row['section'].' </a>
      ';
    }
  }
/* End of retrieving grade and section */


  /* For display which subject is selected if it is selected */
  $subjectSelected;
  if(isset($_GET['subject'])) 
    $subjectSelected =  $_GET['subject'];
  else
    $subjectSelected = 'Select Subject';

  /* For sending the current selected grade and section to the selected subject */
  $gradeSection;
  if(isset($_GET['grade_section'])) 
    $gradeSection =  $_GET['grade_section'];
  else
    $gradeSection = ' ';


  $output .= '
  
      </div> <!-- Grade section -->
    </div>
    <hr>
    
  ';

  /* If grade and section is selected, display the add schedule form */
  if($gradeSection != ' ') {
    $output .= '
    <div class="dropdown" style="width: 100%; display:flex; justify-content:center;">
      <button onclick="dropDown('.'\'subject\''.')" class="dropbtn">'.$subjectSelected.'</button>
      <div id="subject" class="dropdown-content">
        <a href="scheduler.php?grade_section='.$gradeSection.'&subject=Mathematics#main">Mathematics</a>
        <a href="scheduler.php?grade_section='.$gradeSection.'&subject=Science#main">Science</a>
        <a href="scheduler.php?grade_section='.$gradeSection.'&subject=English#main">English</a>
        <a href="scheduler.php?grade_section='.$gradeSection.'&subject=Filipino#main">Filipino</a>
        <a href="scheduler.php?grade_section='.$gradeSection.'&subject=MAPEH#main">MAPEH</a>
        <a href="scheduler.php?grade_section='.$gradeSection.'&subject=AP#main">AP</a>
        <a href="scheduler.php?grade_section='.$gradeSection.'&subject=ESP#main">ESP</a>
        <a href="scheduler.php?grade_section='.$gradeSection.'&subject=TLE#main">TLE</a>
      </div>
    </div>
    <hr>
  ';

  /* Retrieve teacher by subject selected, data will be taken by what department they are in */
  $teacherName;
  $teacherId;

  if( isset($_GET['grade_section']) && isset($_GET['subject']) ) {

    $temp = retrieveTwoId($pdo, 'class_schedule', 'grade_section', $_GET['grade_section'], 'subject', $_GET['subject']);
      
      if(isset($temp['teacher_id'])) {

        $teacherSelected = $temp['teacher_id'];
        $teacherSelected = retrieveId($pdo, 'teacher', 'id', $teacherSelected);
        $teacherId = $teacherSelected['id'];
        $teacherName = $teacherSelected['firstName'] . ' ' . $teacherSelected['lastName'];
      } else {

        $teacherName = 'Select Teacher';
        $teacherId = '';
      }

  } else {

    $teacherId = '';
    $teacherName = 'Select Teacher';
  }

  $output .= '
    <form action="scheduler.php" method="post">
    <label for="teacher" style="display:inline-block; margin-left: 25%;">Available Teachers</label> <br>
      <select name="teacher" style="width:80%; margin: 2% 0 0 10%;" required>
        <option value="'.$teacherId.'" selected>'.$teacherName.'</option>
  ';

  if( isset($_GET['grade_section']) && isset($_GET['subject']) ) {

    if($teacherName == 'Select Teacher') {

      $allTeacher = retrieveAllId($pdo, 'teacher', 'dept', $_GET['subject']);
      
      foreach($allTeacher as $teacher) { //display all the teacher as option

        $id = $teacher['id'];
        $firstName = $teacher['firstName'];
        $lastName = $teacher['lastName'];
        $fullName = $firstName . ' ' . $lastName;
        $output .= '
          <option value="'.$id.'">'.$fullName.'</option> 
        ';
      }

    }
  }


  $output .= '

      </select>
    <hr>
  </div>

  <div style="width:100%; text-align: center;">
  <h1>Day Picker</h1>
    <div class="day-picker"> 
      <div>
        <label>
          <input type="checkbox" name="day[]" value="mon"> 
          <span style="background:grey;">Mon</span>
          </label>
      </div>

      <div>
        <label>
          <input type="checkbox" name="day[]" value="tue"> 
          <span style="background: #008c9b;">Tue</span>
          </label>
      </div>

      <div>
        <label>
          <input type="checkbox" name="day[]" value="wed"> 
          <span style="background:#93388d;">Wed</span>
          </label>
      </div>

      <div>
        <label>
        <input type="checkbox" name="day[]" value="thu"> 
        <span style="background:#812438;">Thu</span>
        </label>
      </div>

      <div>
        <label>
          <input type="checkbox" name="day[]" value="fri"> 
          <span style="background:#80852e;">Fri</span>
          </label>
      </div>

    </div>
  </div>

  <div style="margin:5%; text-align: center;">
  <h1>Time and Duration</h1>
    <label for="start_time">Start Time</label>

      <select name="start_time" style="width:28%; margin: 0 0 0 6%;">
          <option value="700" selected> 7 AM</option>
          <option value="800"> 8 AM</option>
          <option value="900"> 9 AM</option>
          <option value="1000"> 10 AM</option>
          <option value="1100"> 11 AM</option>
          <option value="1200"> 12 PM</option>
          <option value="1300"> 1 PM</option>
          <option value="1400"> 2 PM</option>
          <option value="1500"> 3 PM</option>
          <option value="1600"> 4 PM</option>
      </select>

      <select name="start_time_add" style="width:22%; margin: 0 0 0 6%;">
        <option value="0">00</option>
        <option value="50" selected>30</option>
        <option value="75" >45</option>
      </select>
  </div>

  <div style="margin:5%; text-align: center;">
    <label for="duration">Duration</label>
      <select name="duration" style="width:50%; margin: 0 0 0 10%;">
        <option value="100" selected>1 Hr</option>
        <option value="200">2 Hr</option>
        <option value="300">3 Hr</option>
      </select>
    <hr>
  </div>  

  
  <input type="hidden" name="grade_section" value="'.$gradeSection.'">
  <input type="hidden" name="subject" value="'.$subjectSelected.'">
  <input type="submit" name="saveSchedule" value="Save Schedule">
</form>

</div>
  ';
} else {
  $output .= '
  </div>
</div>
  ';
}
/*                        END OF SCHEDULE MAKING                     */


/*     DISPLAY TIME TABLE     */
  $output .= '

<div class="text">
  <div class="text-wrapper">
    
    <span class="text-header">'.$displayGradeSection.'</span> 
  ';

  if(isset($_GET['grade_section'])) { //For showing how many hours has been alloted to a subject
    $grade_section = $_GET['grade_section'];
    $subjects = ['Mathematics', 'Science', 'English', 'Filipino', 'TLE', 'AP', 'MAPEH', 'ESP'];
    $subjectsCount = [0, 0, 0, 0, 0, 0, 0, 0];

    for($i = 0; $i < 8; $i++) { //all subjects = 8

      $temp = retrieveAllTwoId($pdo, 'class_schedule', 'grade_section', $grade_section, 'subject', $subjects[$i]);

      foreach($temp as $row) {
          if(isset($row['duration']))
            $subjectsCount[$i] += ($row['duration']/100);
      }
      

    }

    $output .= '
    <span class="total-hours"> 
      <span class="Mathematics"> <u>Math</u> <br> '.$subjectsCount[0].'/4  </span>
      <span class="Science"> <u>Sci</u> <br> '.$subjectsCount[1].'/4 </span>
      <span class="English"> <u>Eng</u> <br> '.$subjectsCount[2].'/4 </span>
      <span class="Filipino"> <u>Fil</u> <br> '.$subjectsCount[3].'/4 </span>
      <span class="TLE"> <u>TLE <br></u> '.$subjectsCount[4].'/4 </span>
      <span class="AP"> <u>AP</u> <br> '.$subjectsCount[5].'/3 </span>
      <span class="MAPEH"> <u>MAPEH</u> <br> '.$subjectsCount[6].'/4 </span>
      <span class="ESP"> <u>ESP</u> <br> '.$subjectsCount[7].'/2 </span>
    </span>
    ';
  }

  $output .= '
  </div>
  <hr>
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
  ';

  //For retrieving all data from the grade and section selected (will be displayed later)
  $grade_section_sched = retrieveAllId($pdo, 'class_schedule', 'grade_section', $gradeSection);

  foreach($grade_section_sched as $sched) {
    
    $teacher = retrieveId($pdo, 'teacher', 'id', $sched['teacher_id']);
    $schedDay = $sched['day'];
    $schedStart = $sched['start_time'];
    $schedEnd = $sched['end_time'];
    $schedSubject = $sched['subject'];
    $schedTeacher = $teacher['firstName'] . ' ' . $teacher['lastName'];

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
    //display each on their own day and day in the grid
    $output .= '

          <div class="session '.$schedSubject.'" style="grid-column: '.$schedDay.'; grid-row: time-'.$schedStart.' / time-'.$schedEnd.';">
            <div class="session-time">
    ';
    //check again if sched start/end is a 45 minute then add 25 
    if($isStart45)  
      $schedStart += 25;
    if($isEnd45)
      $schedEnd += 25;

    $output .= '
              <span>'.convertTime($schedStart).' - '.convertTime($schedEnd) . ' ' . '</span>
              <span><u>'.convertSubject($schedSubject).'</u></span>

              <!-- FORM FOR THE DELETE BUTTON -->
              <div> 
                <form action="scheduler.php" method="post" style="display:inline-block; margin:0; padding:0;">
                  <input type="hidden" name="teacher_id" value="'.$teacher['id'].'">
                  <input type="hidden" name="grade_section" value="'.$gradeSection.'">
                  <input type="hidden" name="duration" value="'.$sched['duration'].'">
                  <button type="submit" name="deleteSchedule" value="'.$sched['id'].'" style="background:#fb7777;">X</button> 
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

<script src="./includes/templates/script/gradeSectionDrop.js"> </script>
