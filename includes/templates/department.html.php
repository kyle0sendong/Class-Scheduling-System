<link rel="stylesheet" type="text/css" href="./includes/templates/css/department.css">

<?php 
$title = 'Department';

//total number of faculty per department
$mathCount = totalId($pdo, 'teacher', 'dept', 'Mathematics');
$sciCount = totalId($pdo, 'teacher', 'dept', 'Science');
$engCount = totalId($pdo, 'teacher', 'dept', 'English');
$filCount = totalId($pdo, 'teacher', 'dept', 'Filipino');
$mapehCount = totalId($pdo, 'teacher', 'dept', 'MAPEH');
$apCount = totalId($pdo, 'teacher', 'dept', 'AP');
$espCount = totalId($pdo, 'teacher', 'dept', 'ESP');
$tleCount = totalId($pdo, 'teacher', 'dept', 'TLE');

$output = '
<div class="wrapper-department">
    <div class="dept_title">
        <h2><b>Teaching Departments</b></h2>
    </div>

    <hr style="border-top: 3px solid black; margin-top: -10px;">

    <form action="teacher.php" method="get" class="d-flex" >
        <input class="form-control me-2" type="text" name="search" placeholder="Faculty Name" aria-label="Search" style="width:20%; margin-left: 70%;"> 
        <button class="btn btn-outline-success" style="color:white; background:#7ECBCD;"type="submit">Search</button>
    </form>

    <div class="table">

        <table>
            <thead> 
                <tr>
                    <th style="text-align: center;"></th>
                    <th style="text-align: center;">No. of Faculty/s</th>
                    <th style="text-align: center;">Department Head</th>
                    <th style="text-align: center;"></th>
                </tr>  
            </thead>

            <tbody>
                <tr>
                    <td><b>Mathematics<b></td>
                    <td>'.$mathCount.'</td>
                    <td>TBD</td>
                    <td> <link><a href="teacher.php?dept=Mathematics#main"><button type="button" class="btn btn-primary">Show Faculties</button></a></link> </td>
                </tr>

                <tr>
                    <td><b>Science<b></td>
                    <td>'.$sciCount.'</td>
                    <td>TBD</td>
                    <td> <link><a href="teacher.php?dept=Science#main"><button type="button" class="btn btn-primary">Show Faculties</button></a></link> </td>
                
                <tr>
                    <td><b>English<b></td>
                    <td>'.$engCount.'</td>
                    <td>TBD</td>
                    <td> <link><a href="teacher.php?dept=English#main"><button type="button" class="btn btn-primary">Show Faculties</button></a></link> </td>
                </tr>

                <tr>
                    <td><b>Filipino<b></td>
                    <td>'.$filCount.'</td>
                    <td>TBD</td>
                    <td> <link><a href="teacher.php?dept=Filipino#main"><button type="button" class="btn btn-primary">Show Faculties</button></a></link> </td>
                </tr>
                <tr>
                    <td><b>MAPEH<b></td>
                    <td>'.$mapehCount.'</td>
                    <td>TBD</td>
                    <td> <link><a href="teacher.php?dept=MAPEH#main"><button type="button" class="btn btn-primary">Show Faculties</button></a></link> </td>
                </tr>
                <tr>
                    <td><b>AP<b></td>
                    <td>'.$apCount.'</td>
                    <td>TBD</td>
                    <td> <link><a href="teacher.php?dept=AP"#main><button type="button" class="btn btn-primary">Show Faculties</button></a></link> </td>
                </tr>   
                <tr>
                    <td><b>ESP<b></td>
                    <td>'.$espCount.'</td>
                    <td>TBD</td>
                    <td> <link><a href="teacher.php?dept=ESP#main"><button type="button" class="btn btn-primary">Show Faculties</button></a></link> </td>
                </tr>
                <tr>
                    <td><b>TLE<b></td>
                    <td>'.$tleCount.'</td>
                    <td>TBD</td>
                    <td> <link><a href="teacher.php?dept=TLE#main"><button type="button" class="btn btn-primary">Show Faculties</button></a></link> </td>
                </tr>        
                            
            </tbody>
        </table>
    </div> 
</div>
';

?>