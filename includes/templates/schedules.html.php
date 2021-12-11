<link rel="stylesheet" href="./includes/templates/css/schedules.css">
    
<?php 

$output = '

<div class="set">
    <h2><b>GRADE LEVEL MANAGEMENT</b></h2> <hr>
</div> 


<div class="schedules_container">

    <div class="card" style="display:inline-block; border:none;height:50%; width: 25%; margin-left: 2%; margin-top: 2%;">
        <div class="card-header">
                New Grade & Section
        </div>
        
        <form action="schedules.php" method="post">
            <div class="card-body"> 
                
                <div class="form-group" style="margin:5px;">
                    <label class="control-label">Grade Level</label>
                    <select class="form-control" name="grade">
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                    </select>
                </div>

                <div class="form-group">
                    <label class="control-label">Section</label>
                    <select class="form-control" name="section">
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="C">C</option>
                        <option value="D">D</option>
                        <option value="E">E</option>
                        <option value="F">F</option>
                        <option value="G">G</option>
                        <option value="H">H</option>
                    </select>
                </div> 
';

//get all list of teachers and show on form as option
$allTeachers = retrieveAll($pdo, 'teacher');

$output .= '    
                <div class="form-group">
                    <label class="control-label">Adviser</label>
                    <select class="form-control" name="adviser"> 
';
                foreach($allTeachers as $row) { //print all teacher option
$output .= '        
                    <option value="'.$row['id'].'">
                    '.$row['firstName'].' '.$row['lastName'].
                    '</option>
';
                }

$output .= '
                    </select>
                </div>
            </div>
                
            <div class="card-footer">
                <div class="row">
                    <div class="col-md-12">
                        <button class="btn btn-sm btn-primary col-sm-3 offset-md-3" name="newEntry" value="newEntry"> Save</button>
                        <button class="btn btn-sm btn-default col-sm-3" type="button" onclick="_reset()"> Clear</button>
                    </div>
                </div>
            </div>

        </form>
    </div>



<!--Table-->
    <div class="table" style="display:inline-block; width:62%; margin: 2% 2% 10% 5%;" >
    <table>
        <thead style="border-bottom: solid #000;border-bottom-width: 2px;"> 
            <tr>
                <th style="text-align: center;">Grade Level</th>
                <th style="text-align: center;">Section</th>
                <th style="text-align: center;">Subjects Filled</th>
                <th style="text-align: center;">Subjects Hours</th>
                <th style="text-align: center;">Adviser</th>
                <th style="text-align: center;"> </th>
            </tr>  
        </thead>

        <tbody>
        
';

        //display each row in the GRADE and SECTIONS table
        for ($i = 7; $i <= 10; $i++) {

            $output .= ' 
            <tr>
                <td><b>'.$i.'</b></td>
            ';   
            $allLevels = retrieveAllId($pdo, 'grade_level', 'grade', $i);
        
            foreach($allLevels as $row) {
                $adviser = retrieveId($pdo, 'teacher', 'id', $row['adviser_id']);
                $output .= '  
                <td>'.$row['section'].'</td>
                <td>0/8</td>
                <td>0/24</td>
                <td>'.$adviser['firstName']. ' '.$adviser['lastName'].'</td>
                <td>
                    <link><a href="scheduler.php" target="_blank"><button type="button" class="btn btn-primary">Edit Schedule</button></a></link>
                    <form action="schedules.php" method="post" style="display: inline;margin:0; padding:0">
						<input type="hidden" name="id" value="'.$row['id'].'">
						<button type="submit" class="btn btn-danger" name="deleteEntry" value="deleteEntry" style="font-size: 12px;">Remove</button>
					</form>
                </td>
            </tr>
            <tr>
                <td></td>   <!-- for the first column -->
                ';
            }
        }

$output.= '   
        </tbody>

    </table>
    </div> 

</div>
';

?>


<!--    removed codes

<div class="next-button">
    <a class="btn btn-light" href="curriculum.html" role="button"><i class="fas fa-chevron-left"></i>Previous</a>
    <a class="btn btn-light" href="#" role="button"><i` class="fas fa-chevron-right"></i>Next</a>
</div> 

<form class="d-flex">
    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success" type="submit">Search</button>
    
</form>

.d-flex{
    width: 400px;;
    position: absolute;
    right : 5%;
}
   
-->