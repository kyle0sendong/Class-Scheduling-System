<link rel="stylesheet" type="text/css" href="./includes/templates/css/scheduler.css">

<?php 

$isSetGradeSection = isset($_GET['grade_section']);

$output = '

<!--ADD MODULE -->
<div style="display:flex;">
<div class="add-module">
<h2>Set Schedule</h2>

<!-- Retrieving grade and section -->
  <div style="margin:5%">
  <div class="dropdown">
';

/* For display which grade and section is selected */
  $grade;
  $section;
  if($isSetGradeSection) {
    $grade = $_GET['grade_section'];
    $section = substr($grade, -1);
    $grade = substr_replace($grade ,"", -1);
    $gradeSection = 'Grade ' . $grade . ' - ' . $section;
  }
  else
    $gradeSection = 'Select Grade and Section';
  
$output .= '
    <button onclick="dropDown('.'\'grade_section\''.')" class="dropbtn">'.$gradeSection.'</button>
    <div id="grade_section" class="dropdown-content">
';

    //retrieve grade and section and show them as clickable links
    for($i = 7; $i <= 10; $i++) {
      $gradeLevel = retrieveAllId($pdo, 'grade_level', 'grade', $i);
      foreach($gradeLevel as $gradeSection) {
        $output .= '
          <a href="scheduler.php?grade_section='.$gradeSection['grade'].$gradeSection['section'].'">
          Grade '.$gradeSection['grade'].' - ' .$gradeSection['section'].' </a>
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
  if($isSetGradeSection) 
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
    $allTeacher = retrieveAllId($pdo, 'teacher', 'dept', $subjectSelected);
    $currentTeacher;  //if current teacher is already set
    if(isset($_POST['teacher_id']))
      $currentTeacher = $_POST['teacher_id'];
    else
      $currentTeacher = 'TBD';

$output .= '
    <form action="scheduler.php" method="post">
    <label for="teacher">Available Teachers</label> <br>
      <select name="subject" style="width:80%; margin: 2% 0 0 10%;">
        <option>'.$currentTeacher.'</option>
';
      //display all the teacher as option
        foreach($allTeacher as $teacher) {
          $id = $teacher['id'];
          $firstName = $teacher['firstName'];
          $lastName = $teacher['lastName'];
          $fullName = $firstName . ' ' . $lastName;
          $output .= '<option value="'.$id.'">'.$fullName.'</option> ';
        }

$output .= '
      </select>
    <hr>
  </div>


  <div style="margin:5%">
  <h1>Time and Duration</h1>
    <label for="start_time">Start Time</label>

      <select name="hour" style="width:28%; margin: 0 0 0 6%;">
          <option selected> 7 AM</option>
          <option> 8 AM</option>
          <option> 9 AM</option>
          <option> 10 AM</option>
          <option> 11 AM</option>
          <option> 12 PM</option>
          <option> 1 PM</option>
          <option> 2 PM</option>
          <option> 3 PM</option>
          <option> 4 PM</option>
      </select>

      <select name="min" style="width:22%; margin: 0 0 0 6%;">
        <option selected>00</option>
        <option>15</option>
        <option >30</option>
        <option >45</option>
      </select>
  </div>

  <div style="margin:5%">
    <label for="duration">Duration</label>
      <select name="end_time" style="width:50%; margin: 0 0 0 10%;">
        <option>30 Min</option>
        <option selected>1 Hr</option>
        <option >1 Hr 30 Min</option>
        <option >2 Hr</option>
        <option >2 Hr 30 Min</option>
        <option >3 Hrs</option>
      </select>
    <hr>
  </div>  

  <div style="margin:5%; width:100%;">
  <h1>Day</h1>
    <div class="day-picker"> 
      <div>
        <label>
          <input type="checkbox" name="mon"> 
          <span style="background:#0075b6;">Mon</span>
          </label>
      </div>

      <div>
        <label>
          <input type="checkbox" name="tue"> 
          <span style="background: #008c9b;">Tue</span>
          </label>
      </div>

      <div>
        <label>
          <input type="checkbox" name="wed"> 
          <span style="background:#93388d;">Wed</span>
          </label>
      </div>

      <div>
        <label>
        <input type="checkbox" name="thu"> 
        <span style="background:#812438;">Thu</span>
        </label>
      </div>

      <div>
        <label>
          <input type="checkbox" name="fri"> 
          <span style="background:#80852e;">Fri</span>
          </label>
      </div>

    </div>
  </div>

  <input type="submit" name="newSchedule" value="Add Schedule">

</form>
</div>


<div class="text">
  <h2 id="schedule-heading" style="margin-left: 15%; padding-top: 20px;"> Class Schedule</h2>
  <div class="schedule" aria-labelledby="schedule-heading">
    
    <span class="track-slot" aria-hidden="true" style="grid-column: track-1; grid-row: tracks;">Monday</span>
    <span class="track-slot" aria-hidden="true" style="grid-column: track-2; grid-row: tracks;">Tuesday</span>
    <span class="track-slot" aria-hidden="true" style="grid-column: track-3; grid-row: tracks;">Wednesday</span>
    <span class="track-slot" aria-hidden="true" style="grid-column: track-4; grid-row: tracks;">Thursday</span>
    <span class="track-slot" aria-hidden="true" style="grid-column: track-5; grid-row: tracks;">Friday</span>
    
    <h2 class="time-slot" style="grid-row: time-0700;">7:00am</h2>
    <h2 class="time-slot" style="grid-row: time-0800;">8:00am</h2>
    <h2 class="time-slot" style="grid-row: time-0900;">9:00am</h2>
    <h2 class="time-slot" style="grid-row: time-1000;">10:00am</h2>
    <h2 class="time-slot" style="grid-row: time-1100;">11:00am</h2>
    <h2 class="time-slot" style="grid-row: time-1200;">12:00pm</h2>
    <h2 class="time-slot" style="grid-row: time-0100;">1:00pm</h2>
    <h2 class="time-slot" style="grid-row: time-0200;">2:00pm</h2>
    <h2 class="time-slot" style="grid-row: time-0300;">3:00pm</h2>
    <h2 class="time-slot" style="grid-row: time-0400;">4:00pm</h2>
    
    <div class="session track-1" style="grid-column: track-1; grid-row: time-0700 / time-0900;">
      <span class="session-time">7:00 - 9:00</span>
      <span class="session-track">Anne Cruz</span>
      <span class="session-presenter">Room2</span>
      <button>Delete</button>
    </div>

    <div class="session track-2" style="grid-column: track-2; grid-row: time-0700 / time-0900;">
      <span class="session-time">7:00 - 9:00</span>
      <span class="session-track">Anne Cruz</span>
      <span class="session-presenter">Room2</span>
      <button>Delete</button>
    </div>

    <div class="session track-3" style="grid-column: track-3; grid-row: time-0700 / time-0900;">
      <span class="session-time">7:00 - 9:00</span>
      <span class="session-track">Anne Cruz</span>
      <span class="session-presenter">Room2</span>
      <button>Delete</button>
    </div>

    <div class="session track-4" style="grid-column: track-4; grid-row: time-0700 / time-0900;">
      <span class="session-time">7:00 - 9:00</span>
      <span class="session-track">Anne Cruz</span>
      <span class="session-presenter">Room2</span>
      <button>Delete</button>
    </div>

    <div class="session track-5" style="grid-column: track-5; grid-row: time-0700 / time-0900;">
      <span class="session-time">7:00 - 9:00</span>
      <span class="session-track">Anne Cruz</span>
      <span class="session-presenter">Room2</span>
      <button>Delete</button>
    </div>

</div>
</div>


';

?>

<script src="./includes/templates/script/gradeSectionDrop.js"> </script>