<link rel="stylesheet" type="text/css" href="./includes/templates/css/sched.css">

<?php 

$output = '

<div class="sched">
    <div class="add-module">
      <h2>Set Schedule</h2>
      <h1>Teacher</h1>
      <input type="text" placeholder="Ex...Anne Cruz">
      <h1>Subject</h1>
      <input type="text" placeholder="Ex..Mathematics">
      <div class="half">
        <label for="grade">Grade Level</label>    
        <select id="grade">
        <option label="Grade 7"></option>
        <option label="Grade 8"></option>
        <option label="Grade 9"></option>
        <option label="Grade 10"></option>
        </select>
        <label for="section">Section</label>
        <select id="section">
        <option label="A"></option>
        <option label="B"></option>
        <option label="C"></option>
        <option label="D"></option>
        <option label="E"></option>
        <option label="F"></option>
        </select>
        <h1>Start Time</h1>
        <input type="time" value="09:00">
    </div>
      <div class="half">
        <h1>End Time</h1>
        <input type="time" value="10:00">
    </div>  
      <h1>Room</h1>
      <input type="text" placeholder="Ex...Room1">
      <h1>Day</h1>
    <ul class="day-picker">
        <li>Mon</li><li class="day-selected">Tue</li><li>Wed</li><li>Thu</li><li>Fri</li>
    </ul>
    <h1>Color</h1>
    <ul class="color-picker">
        <li class="blue"></li>
        <li class="red"></li>
        <li class="yellow"></li>
        <li class="purple"></li>
        <li class="green"></li>
        <li class="orange"></li>
        <li class="gray"></li>
        <li class="navy"></li>
    </ul>
      <form>
        <input type="submit" value="Add to Timetable">
      </form>
    </div>
</div>



<div class="text">
  <h2 id="schedule-heading">Conference Schedule</h2>
  <div class="schedule" aria-labelledby="schedule-heading">
    
    <span class="track-slot" aria-hidden="true" style="grid-column: track-1; grid-row: tracks;">Monday</span>
    <span class="track-slot" aria-hidden="true" style="grid-column: track-2; grid-row: tracks;">Tuesday</span>
    <span class="track-slot" aria-hidden="true" style="grid-column: track-3; grid-row: tracks;">Wednesday</span>
    <span class="track-slot" aria-hidden="true" style="grid-column: track-4; grid-row: tracks;">Thursday</span>
    <span class="track-slot" aria-hidden="true" style="grid-column: track-5; grid-row: tracks;">Friday</span>
    
    <h2 class="time-slot" style="grid-row: time-0700;">7:00am</h2>
  
    <div class="session session-1 track-1" style="grid-column: track-1; grid-row: time-0700 / time-0900;">
      <span class="session-time">7:00 - 9:00</span>
      <span class="session-track">Anne Cruz</span>
      <span class="session-presenter">Room2</span>
      <button>Edit</button><button>Delete</button>
    </div>
    <h2 class="time-slot" style="grid-row: time-0800;">8:00am</h2>

    <div class="session session-2 track-2" style="grid-column: track-4; grid-row: time-0800 / time-1000;">
      <span class="session-time">8:00 - 10:00</span>
      <span class="session-track">Anne Cruz</span>
      <span class="session-presenter">Room6</span>
      <button>Edit</button><button>Delete</button>
    </div>
    
    <h2 class="time-slot" style="grid-row: time-0900;">9:00am</h2>
    
    <div class="session session-3 track-4" style="grid-column: track-2; grid-row: time-0100/ time-0300;">
      <span class="session-time">1:00- 03:00</span>
      <span class="session-track">Anne Cruz</span>
      <span class="session-presenter">Room6</span>
      <button>Edit</button><button>Delete</button>
    </div>

    <h2 class="time-slot" style="grid-row: time-1000;">10:00am</h2>
    <div class="session session-4 track-3" style="grid-column: track-3; grid-row: time-1000 / time-1200;">
        <span class="session-time">10:00 - 12:00</span>
        <span class="session-track">Anne Cruz</span>
        <span class="session-presenter">Room8</span>
        <button>Edit</button><button>Delete</button>
      </div>
    <h2 class="time-slot" style="grid-row: time-1100;">11:00am</h2>
    <h2 class="time-slot" style="grid-row: time-1200;">12:00pm</h2>
    <h2 class="time-slot" style="grid-row: time-0100;">1:00pm</h2>
    <div class="session session-6 track-4" style="grid-column: track-2; grid-row: time-0100/ time-0300;">
        <span class="session-time">1:00- 03:00</span>
        <span class="session-track">Anne Cruz</span>
        <span class="session-presenter">Room6</span>
        <button>Edit</button><button>Delete</button>
      </div>
    <h2 class="time-slot" style="grid-row: time-0200;">2:00pm</h2>
    <div class="session session-6 track-5" style="grid-column: track-5; grid-row: time-0200 / time-0400;">
        <span class="session-time">02:00 - 04:00</span>
        <span class="session-track">Anne Cruz</span>
        <span class="session-presenter">Room8</span>
        <button>Edit</button><button>Delete</button>
      </div>
    <h2 class="time-slot" style="grid-row: time-0300;">3:00pm</h2>
    <h2 class="time-slot" style="grid-row: time-0400;">4:00pm</h2>
    <h2 class="time-slot" style="grid-row: time-0500;">5:00pm</h2>
</div>

';

?>