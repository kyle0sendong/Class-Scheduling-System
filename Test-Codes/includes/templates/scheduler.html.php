<link rel="stylesheet" type="text/css" href="./includes/templates/css/scheduler.css">

<?php 

$isSetGradeSection = isset($_GET['grade_section']);

$output = '

<!--ADD MODULE -->
<div style="display:flex;">
<div class="add-module">
<h2>Set Schedule</h2>

  <!--  -->
  <div style="margin:5%">

  <div class="dropdown">
';

  $grade;
  $section;

  if($isSetGradeSection) {
    $grade = $_GET['grade_section'];
    $section = substr($grade, -1);
    $grade = substr_replace($grade ,"", -1);
    $gradeSection = 'Grade ' . $grade . ' - ' . $section;
  }
  else
    $gradeSection = 'Grade and Section';

$output .= '
    <button onclick="dropDown()" class="dropbtn">'.$gradeSection.'</button>
    <div id="grade_section" class="dropdown-content">
';

    //retrieve grade and section for the form
    for($i = 7; $i <= 10; $i++) {
      $gradeLevel = retrieveAllId($pdo, 'grade_level', 'grade', $i);
      foreach($gradeLevel as $gradeSection) {
        $output .= '
          <a href="scheduler.php?grade_section='.$gradeSection['grade'].$gradeSection['section'].'">
          Grade '.$gradeSection['grade'].$gradeSection['section'].' </a>
        ';
      }
    }
    
$output .= '
    </div>
  </div>

      <hr>
    
  <form action="scheduler.php" method="post">
    <label for="subject">Subjects</label>
      <select name="subject" style="width:60%; margin-left: 5%;">
        <option value="Mathematics">Mathematics</option>
        <option value="Science">Science</option>
        <option value="English">English</option>
        <option value="Filipino">Filipino</option>
        <option value="MAPEH">MAPEH</option>
        <option value="AP">AP</option>
        <option value="ESP">ESP</option>
        <option value="TLE">TLE</option>
      </select>
    <hr>

    <label for="teacher">Available Teachers</label> <br>
      <select name="subject" style="width:80%; margin: 2% 0 0 10%;">
      <option>Mathematics</option>
      </select>
    <hr>

  </div>


  <div style="margin:5%">
  <h1>Time and Duration</h1>
    <label for="time">Start Time</label>

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
      <select name="subject" style="width:50%; margin: 0 0 0 10%;">
        <option>30 Min</option>
        <option selected>1 Hr</option>
        <option >1 Hr 30 Min</option>
        <option >2 Hr</option>
        <option >2 Hr 30 Min</option>
        <option >3 Hr</option>
      </select>
    <hr>
  </div>  

  <div style="margin:5%; width:100%;">
  <h1>Day</h1>
    <div class="day-picker"> 
    
      <div>
        <label>
          <input type="checkbox" name=""> 
          <span style="background:#0075b6;">Mon</span>
          </label>
      </div>

      <div>
        <label>
          <input type="checkbox" name=""> 
          <span style="background: #008c9b;">Tue</span>
          </label>
      </div>

      <div>
        <label>
          <input type="checkbox" name=""> 
          <span style="background:#93388d;">Wed</span>
          </label>
      </div>

      <div>
        <label>
        <input type="checkbox" name=""> 
        <span style="background:#812438;">Thu</span>
        </label>
      </div>

      <div>
        <label>
          <input type="checkbox" name=""> 
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