<link rel="stylesheet" type="text/css" href="css/scheduler.css">


<?php 

  $output = '
  <div class="sched">
      <div class="add-module">
          <h1>Set Schedule</h1>
          <div class="input-group mb-3">
              <span class="input-group-text" id="inputGroup-sizing-default">Teacher</span>
              <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"><br>
          </div>
          <div class="input-group mb-3">
              <label class="input-group-text" for="inputGroupSelect01">Grade Level</label>            
              <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                  <option selected>Choose...</option>
                  <option value="1">7</option>
                  <option value="2">8</option>
                  <option value="3">9</option>
                  <option value="4">10</option><br>
              </select>
              <label class="input-group-text" for="inputGroupSelect01">Section</label>   
              <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                  <option selected>Choose...</option>
                  <option value="1">A</option>
                  <option value="2">B</option>
                  <option value="3">C</option>
                  <option value="4">D</option>
                  <option value="5">E</option>
                  <option value="6">F</option><br>
              </select>
              <div class="input-group mb-3"></div>
                  <label class="input-group-text" for="inputGroupSelect01">Rooms</label>
                  <select class="form-select" id="inputGroupSelect01">
                  <option selected>Available Rooms</option>
                  <option value="1">R1</option>
                  <option value="2">R2</option>
                  <option value="3">R3</option>
                  <option value="4">R4</option>
                  </select>
              </div>
              <div class="time-select">
                  <h2>Start Time</h2>
                  <input type="time" value="09:00"><br>
                  <h2>End Time</h2>
                  <input type="time" value="10:00">
                  <h2>Day</h2>
                  <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                      <label class="form-check-label" for="flexCheckDefault">
                        Monday</label>
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                      <label class="form-check-label" for="flexCheckChecked">
                        Tuesday
                      </label>
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                      <label class="form-check-label" for="flexCheckDefault">
                        Wednesday
                      </label>
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                      <label class="form-check-label" for="flexCheckChecked">
                        Thurday
                      </label>
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                      <label class="form-check-label" for="flexCheckDefault">
                        Friday
                      </label>
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                      <label class="form-check-label" for="flexCheckChecked">
                        Saturday
                      </label>
                  </div>
                  <div class="parent flex-center">
                      <div id="input-container">
                        <label>Color</label>
                        <input type="Color" name="co" onchange="changeColor()">
                      </div>
                      <div id="box"></div> 
                      <button type="button" class="btn btn-warning">Add to Timetable</button>  
                      </div>
                  </div>                            
                      <script type="text/javascript">
                          function changeColor(){
                              let color = document.getElementById("box").value;
                              document.body.style.backgroundColor=color;
                          }
                      </script>
          </div>
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
                  </td><td></td><td></td><td></td><td></td></span>
                </div>
                </td><td></td></td><td></td><td></td>
                </tr>
                <tr class="row_2 row_white">
                  <td>
                    8:00
                  </td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
                </tr>
                <tr class="row_3 row_gray">
                  <td>
                    9:00
                  </td><td></td><td></td><td></td><td></td><td></td><td></td>
                </tr>
                <tr class="row_4 row_white">
                  <td>
                    10:00
                  </td><td></td><td bgcolor="green">Physics</td><td></td><td></td><td></td><td></td>
                </tr>
                <tr class="row_5 row_gray">
                  <td>
                    11:00
                  </td><td></td><td bgcolor="green"></td><td></td><td></td><td></td><td></td>
                </tr>
                <tr class="row_6 row_white">
                  <td>
                  12:00
                  </td><td></td><td></td><td></td><td></td><td></td><td></td>
                </tr>
                <tr class="row_6 row_gray">
                  <td>
                  1:00
                  </td><td><td bgcolor="red">Math</td>
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
                  </td><td></td><td bgcolor="red"></td><td></td><td></td><td bgcolor="blue">Science</td><td></td><td></td></tr>
                  <tr class="row_9 row_gray">
                  <td>
                  3:00
                  </td><td></td><td></td><td></td><td></td><td bgcolor="blue"></td><td></td></tr>
                  <tr class="row_10 row_white">
                  <td>
                  4.00
                  </td><td></td><td></td><td></td>
                    </tr>
                  </tbody>
              </table>
              </div>
              <div class="action">
                  <a class="btn btn-primary" href="tb.html" role="button"><i class="far fa-edit"></i></a>
                  <button type="btn" class="btn btn-primary"><i class="fa fa-download"></i></button>
              </div>   
      </div>
  </div>  '
?>
        
<?php include __DIR__ . '/../includes/templates/layout.html.php'?>
