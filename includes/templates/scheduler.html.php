<link rel="stylesheet" type="text/css" href="./includes/templates/css/scheduler.css">

<?php 



$output = '

<!-----------------------------ADD MODULE --------------------------->
<div style="display:flex;">
<div class="add-module">


<!-- Retrieving grade and section -->
  <div style="margin:5%">
  <div class="dropdown">
';

/* For display which grade and section is selected */
  $grade;
  $section;
  $displayGradeSection;
  $isSetTemp = isset($_GET['grade_section']);
  if($isSetTemp) {
    $grade = $_GET['grade_section'];
    $section = substr($grade, -1);
    $grade = substr_replace($grade ,"", -1);
    $displayGradeSection = 'Grade ' . $grade . ' - ' . $section;
  }
  else
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
          <a href="scheduler.php?grade_section='.$row['grade'].$row['section'].'">
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
  if($isSetTemp) 
    $gradeSection =  $_GET['grade_section'];
  else
    $gradeSection = ' ';


$output .= '
  
      </div> <!-- Grade section -->
    </div>

    <hr> 
    <label for="subject">Subjects</label> 
    <div class="dropdown" style="width: 50%;">
      <button onclick="dropDown('.'\'subject\''.')" class="dropbtn">'.$subjectSelected.'</button>
      <div id="subject" class="dropdown-content">
        <a href="scheduler.php?grade_section='.$gradeSection.'&subject=Mathematics">Mathematics</a>
        <a href="scheduler.php?grade_section='.$gradeSection.'&subject=Science">Science</a>
        <a href="scheduler.php?grade_section='.$gradeSection.'&subject=English">English</a>
        <a href="scheduler.php?grade_section='.$gradeSection.'&subject=Filipino">Filipino</a>
        <a href="scheduler.php?grade_section='.$gradeSection.'&subject=MAPEH">MAPEH</a>
        <a href="scheduler.php?grade_section='.$gradeSection.'&subject=AP">AP</a>
        <a href="scheduler.php?grade_section='.$gradeSection.'&subject=ESP">ESP</a>
        <a href="scheduler.php?grade_section='.$gradeSection.'&subject=TLE">TLE</a>
      </div>
    </div>
    <hr>
';

    /* Retrieve teacher by subject selected, data will be taken by what department they are in */
    $teacherSelected;
    $teacherName;
    $isSetTemp = isset($_GET['grade_section']) && isset($_GET['subject']); 

    if($isSetTemp) {
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
    <label for="teacher">Available Teachers</label> <br>
      <select name="teacher" style="width:80%; margin: 2% 0 0 10%;" required>
        <option value="'.$teacherId.'" selected>'.$teacherName.'</option>
';
    if($isSetTemp) {
      if($teacherName == 'Select Teacher') {
        $allTeacher = retrieveAllId($pdo, 'teacher', 'dept', $_GET['subject']);
        //display all the teacher as option
        foreach($allTeacher as $teacher) {
          $id = $teacher['id'];
          $firstName = $teacher['firstName'];
          $lastName = $teacher['lastName'];
          $fullName = $firstName . ' ' . $lastName;
          $output .= '<option value="'.$id.'">'.$fullName.'</option> ';
        }
      }
    }


$output .= '

      </select>
    <hr>
  </div>

  <div style="margin:5%; width:100%;">
  <h1>Day</h1>
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

  <div style="margin:5%">
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
        <option value="0" selected>00</option>
        <option value="50">30</option>
      </select>
  </div>

  <div style="margin:5%">
    <label for="duration">Duration</label>
      <select name="duration" style="width:50%; margin: 0 0 0 10%;">
        <option value="100" selected>1 Hr</option>
        <option value="150">1 Hr 30 Min</option>
        <option value="200">2 Hr</option>
        <option value="250">2 Hr 30 Min</option>
        <option value="300">3 Hr</option>
      </select>
    <hr>
  </div>  

  
  <input type="hidden" name="grade_section" value="'.$gradeSection.'">
  <input type="hidden" name="subject" value="'.$subjectSelected.'">
  <input type="submit" name="saveSchedule" value="Save Schedule">
</form>

</div>
<!--------------------------- END OF ADD SCHEDULE -----------------------------> ';


$output .= '
<!------------------------- TIME TABLE ---------------------------->
<div class="text">
  <h2 id="schedule-heading" style="margin-left: 15%; padding-top: 20px;">'.$displayGradeSection.'</h2>
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
      $teacher = retrieveId($pdo, 'teacher', 'id', $sched['teacher_id']);
      $schedDay = $sched['day'];
      $schedStart = $sched['start_time'];
      $schedEnd = $sched['end_time'];
      $schedSubject = $sched['subject'];
      $schedTeacher = $teacher['firstName'] . ' ' . $teacher['lastName'];

$output .= '<div class="session '.$schedSubject.'" style="grid-column: '.$schedDay.'; grid-row: time-'.$schedStart.' / time-'.$schedEnd.';">
              <div class="session-time">
                <div>'.convertTime($schedStart).' - '.convertTime($schedEnd) . ' ' . convertSubject($schedSubject).'</div>
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

<script src="./includes/templates/script/gradeSectionDrop.js"> </script>
