<!DOCTYPE html>
<html>
	<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Schedule</title>
    <link rel="stylesheet" type="text/css" href="css/style3.css">
    <link rel="stylesheet" href="css/all.css">
		<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,200;0,300;0,400;0,600;1,100&display=swap" rel="stylesheet">
    </head>
    <body>
        <div class="main">
            <ul>
               <li><a href="main.html"><b>HOME</b></a></li>
               <li><a class="#schedule"><b>SCHEDULE</b></a></li>
               <li><a href="teacher.html"><b>TEACHER</b></a></li>
               <li><a href="#curriculum"><b>CURRICULUM</b></a></li>
               <li class="main_btn">
                <span style="font-size: 15px; color: yellow;">
                <a href="login1.html"><i class="fas fa-sign-out-alt">Logout</i></a></span>
            </ul>
            <div class="name">
                <div class="content">
                 <h1>Class Scheduler</h1>
            </div>
            <div class="pic">
              <img src="logosched.png">
            </div>
        </div>

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
        </div>  <!-- div class = sched -->

    <div class="time-table">
        <div id="laryngological-clinic" aria-labelledby="ui-id-7" class="ui-tabs-panel ui-widget-content ui-corner-bottom" role="tabpanel" style="display: block;" aria-hidden="false">
          <table class="timetable">
            <thead>
              <h3>TIMETABLE</h3>
              <tr>
                <th>Time & Day</th>
                <th>MONDAY</th>
                <th>TUESDAY</th>
                <th>WEDNESDAY</th>  
                <th>THURSDAY</th>
                <th>FRIDAY</th>
                <th>SATURDAY</th>
              </tr>
            </thead>
            <tbody>
              <tr class="row_1 row_gray">
                <td>
                  7:00
                </td><td></td><td><td rowspan="3" class="event tooltip" style="">
              <div class="event_container"><a title="Mathematics" class="event_header">Mathematics</a><span class="hours">7:00-9:00</span><div class="class_doctors">Anne Cruz</div>
              <div class="after_hour_text">Room3</div>
              <div class="tooltip_text" style="width: 140px; height: 138px; top: 5px; left: 450px;"><div class="tooltip_content"><a title="Mathematics">Mathematics</a>7:00-9:00<br>Anne Cruz<br>Room3</div><button>Edit</button><button>Delete</button>
              <span class="tooltip_arrow"></span>
              
              </td><td></td></td><td></td><td></td>
              </tr>
              <tr class="row_2 row_white">
                <td>
                  8:00
                </td><td></td><td></td><td></td><td></td><td></td><td></td>
              </tr>
              <tr class="row_3 row_gray">
                <td>
                  9:00
                </td><td></td><td></td><td></td><td></td><td></td>
              </tr>
              <tr class="row_4 row_white">
                <td>
                  10:00
                </td><td></td><td></td><td></td><td></td><td></td><td></td>
              </tr>
              <tr class="row_5 row_gray">
                <td>
                11:00
                </td><td></td><td></td><td></td><td></td><td></td><td></td>
              </tr>
              <tr class="row_6 row_white">
                <td>
                12:00
                </td><td></td><td></td><td></td><td></td><td></td><td></td>
              </tr>
              <tr class="row_6 row_gray">
                <td>
                1:00
                </td><td><td rowspan="4" class="event tooltip" style=""><div class="event_container"><a title="Physics" class="event_header">Physics</a><span class="hours">1:00-4:00</span><div class="class_doctors">Ramon Reyes</div><div class="after_hour_text">Room15</div></div>
                <div class="tooltip_text" style="width: 124px; height: 138px; top: 215.4px; left: 300.5px;">
                <div class="tooltip_content"><a title="Physics">Physics</a>1:00-4:00<br>
                  Ramon Reyes<br>
                  Room15
                </div>
                <button>Edit</button><button>Delete</button>
                <span class="tooltip_arrow"></span></div>
                </td><td></td></td><td></td><td></td><td></td>
              </tr>
                <tr class="row_8 row_white">
                <td>
                2:00
                </td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
                <tr class="row_9 row_gray">
                <td>
                3:00
                </td><td></td><td></td><td></td><td></td><td></td></tr>
                <tr class="row_10 row_white">
                <td>
                4.00
                </td><td></td><td></td><td></td>
                    <td class="last" colspan="8">
                      <div class="tip">
                        Click edit to add/change info
                      </div>
                    </td>
                  </tr>
                </tbody>
          </table>
              <button type="btn" class="btn btn-primary">Print<i class="fa fa-print"></i></button>
              <button type="btn" class="btn btn-primary">Download<i class="fa fa-download"></i></button>
      </div>
       <div class="links">
        <a href="https://www.facebook.com/"><span style="font-size: 15px; color: white;">
        <i class="fab fa-facebook-f"></i></span>
        <a href="https://github.com/kyle0sendong/Class-Scheduling-System"><span style="font-size: 15px; color: white;">
        <i class="fab fa-github"></i></span>
        <a href="https://www.google.com/"><span style="font-size: 15px; color: white;">
        <i class="fab fa-google"></i></span>
        </div>
            <footer id="main-footer"> 
                <p>Copyright &copy; 2021, Class Scheduling System</p>
            </footer>
    </body>
    
</html>