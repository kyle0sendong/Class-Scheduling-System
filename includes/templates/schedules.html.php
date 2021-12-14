<link rel="stylesheet" href="./includes/templates/css/schedules.css">
    
<?php 

/*Display form for a new Grade and Section */
$output = '
<div class="set">
    <h2><b>GRADE LEVEL MANAGEMENT</b></h2> <hr>
</div> 

<div class="schedules_container">

    <div class="card">
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

//Get all list of teachers and show on form as option
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

    <div class="table-wrapper">  
';

/*Display table for every grade and section */

//display each row in the GRADE and SECTIONS table

for ($i = 7; $i <= 10; $i++) {
    $currentGrade = retrieveAllId($pdo, 'grade_level', 'grade', $i);

    $output .= ' 

    <div class="table1">
    <table>
        <h5><b>Grade '.$i.'</b></h3>
        <thead style="border-bottom: solid #000;border-bottom-width: 2px;"> 
            <tr>
                <th style="text-align: center;">Section</th>
                <th style="text-align: center;">Subjects Filled</th>
                <th style="text-align: center;">Subjects Hours</th>
                <th style="text-align: center;">Adviser</th>
                <th style="text-align: center;"> </th>
            </tr>  
        </thead>

        <tbody>
    ';

    foreach($currentGrade as $row) {
        $adviser = retrieveId($pdo, 'teacher', 'id', $row['adviser_id']);
        $output .= '  
            <tr>
                <td>'.$row['section'].'</td>
                <td>0/8</td>
                <td>0/24</td> 
        ';

        if(isset($adviser['adviser_id'])) 
            $output .= '
                <td>'.$adviser['firstName']. ' '.$adviser['lastName'].'</td>
            ';
        else 
            $output .= '
                <td>TBD</td>
            ';
        
        $output .= '
                <td>
                    <link><a href="scheduler.php" target="_blank"><button type="button" class="btn btn-primary">Edit Schedule</button></a></link>
                    <form action="schedules.php" method="post" style="display: inline;margin:0; padding:0">
                        <input type="hidden" name="id" value="'.$row['id'].'">
                        <button type="submit" class="btn btn-danger" name="deleteEntry" value="deleteEntry" style="font-size: 12px;">Remove</button>
                    </form>
                </td>
            </tr>
        ';
    }

    $output .= '
        </tbody>
    </table>
    </div> 
    ';
}

$output.= '   
    </div>
</div>
';

?>