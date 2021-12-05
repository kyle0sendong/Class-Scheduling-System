<link rel="stylesheet" href="./includes/templates/css/schedules.css">
    


<?php 

$output = '

<div class="set">
    <h2><b>GRADE LEVEL MANAGEMENT</b></h2> <hr>
</div> 

<form class="d-flex">
    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success" type="submit">Search</button>
    
</form>

<div class="schedules_container">

    <div class="card" style="display:inline-block; height:45.5%; width: 25%; margin-left: 2%; margin-top: 2%;">
        <div class="card-header">
                New Grade & Section
        </div>
        
        <form action="" method="post">
            <div class="card-body"> 
                <input type="hidden" name="id">
                <div class="form-group">
                    <label class="control-label">Grade Level</label>
                    <input type="text" class="form-control" name="subject">
                </div>

                <div class="form-group">
                    <label class="control-label">Section</label>
                    <input type="text" class="form-control" name="subject">
                </div>

                <div class="form-group">
                    <label class="control-label">Adviser</label>
                    <input type="text" class="form-control" name="subject">
                </div>
            </div>
                
            <div class="card-footer">
                <div class="row">
                    <div class="col-md-12">
                        <button class="btn btn-sm btn-primary col-sm-3 offset-md-3"> Save</button>
                        <button class="btn btn-sm btn-default col-sm-3" type="button" onclick="_reset()"> Clear</button>
                    </div>
                </div>
            </div>
        </form>

    </div>

    <div class="table" style="display:inline-block; width:62%; margin: 5% 5% 10% 5%;" >
    <table>
        <thead style="border-bottom: solid #000;border-bottom-width: 2px;"> 
            <tr>
                <th style="text-align: center;">Grade Level</th>
                <th style="text-align: center;">Section</th>
                <th style="text-align: center;">Subjects Filled</th>
                <th style="text-align: center;">Adviser</th>
                <th style="text-align: center;"> </th>
            </tr>  
        </thead>

        <tbody>
            <tr>
                <td><b>7</b></td>
                <td>A</td>
                <td>1/8</td>
                <td>John John</td>
                <td>
                    <link><a href="#"><button type="button" class="btn btn-primary">Edit Schedule</button></a></link>
                    <link><a href="#"><button type="button" class="btn btn-danger">Remove</button></a></link>
                </td>
            </tr>

            <tr>
                <td><b>7</b></td>
                <td>B</td>
                <td>0/8</td>
                <td>Neeee</td>
                <td>
                <link><a href="#"><button type="button" class="btn btn-primary">Edit Schedule</button></a></link>
                <link><a href="#"><button type="button" class="btn btn-danger">Remove</button></a></link>
                </td>
            </tr>

            <tr>
                <td><b>7</b></td>
                <td>C</td>
                <td>5/8</td>
                <td>Sally</td>
                <td>
                <link><a href="#"><button type="button" class="btn btn-primary">Edit Schedule</button></a></link>
                <link><a href="#"><button type="button" class="btn btn-danger">Remove</button></a></link>
                </td>
            </tr>

            <tr>
                <td><b>7</b></td>
                <td>D</td>
                <td>8/8</td>
                <td>Consulta</td>
                <td>
                <link><a href="#"><button type="button" class="btn btn-primary">Edit Schedule</button></a></link>
                <link><a href="#"><button type="button" class="btn btn-danger">Remove</button></a></link>
                </td>
            </tr>
        </tbody>

    </table>
    </div> 

</div>
';

?>


<!--      line 133
<div class="next-button">
    <a class="btn btn-light" href="curriculum.html" role="button"><i class="fas fa-chevron-left"></i>Previous</a>
    <a class="btn btn-light" href="#" role="button"><i` class="fas fa-chevron-right"></i>Next</a>
</div> 




    
 





   
-->