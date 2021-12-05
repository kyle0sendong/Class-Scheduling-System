<link rel="stylesheet" type="text/css" href="./includes/templates/css/department.css">

<?php 

$mathDept = totalId($pdo, 'teacher', 'dept', 'Mathematics');
$sciDept = totalId($pdo, 'teacher', 'dept', 'Science');
$engDept = totalId($pdo, 'teacher', 'dept', 'English');
$filDept = totalId($pdo, 'teacher', 'dept', 'Filipino');
$mapehDept = totalId($pdo, 'teacher', 'dept', 'MAPEH');
$apDept = totalId($pdo, 'teacher', 'dept', 'AP');
$espDept = totalId($pdo, 'teacher', 'dept', 'ESP');
$tleDept = totalId($pdo, 'teacher', 'dept', 'TLE');



$output = '

<div class="dept_title">
    <h2><b>Teaching Departments</b></h2>
    
</div>

<hr style="border-top: 3px solid black; margin-top: -10px;">

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
                <td>'.$mathDept.'</td>
                <td>johnnn</td>
                <td> <link><a href="teacher.php?dept=Mathematics"><button type="button" class="btn btn-primary">Show Faculties</button></a></link> </td>
            </tr>

            <tr>
                <td><b>Science<b></td>
                <td>'.$sciDept.'</td>
                <td>johnnn</td>
                <td> <link><a href="teacher.php?dept=Science"><button type="button" class="btn btn-primary">Show Faculties</button></a></link> </td>
            
            <tr>
                <td><b>English<b></td>
                <td>'.$engDept.'</td>
                <td>johnnn</td>
                <td> <link><a href="teacher.php?dept=English"><button type="button" class="btn btn-primary">Show Faculties</button></a></link> </td>
            </tr>

            <tr>
                <td><b>Filipino<b></td>
                <td>'.$filDept.'</td>
                <td>johnnn</td>
                <td> <link><a href="teacher.php?dept=Filipino"><button type="button" class="btn btn-primary">Show Faculties</button></a></link> </td>
            </tr>
            <tr>
                <td><b>MAPEH<b></td>
                <td>'.$mapehDept.'</td>
                <td>johnnn</td>
                <td> <link><a href="teacher.php?dept=MAPEH"><button type="button" class="btn btn-primary">Show Faculties</button></a></link> </td>
            </tr>
            <tr>
                <td><b>AP<b></td>
                <td>'.$apDept.'</td>
                <td>johnnn</td>
                <td> <link><a href="teacher.php?dept=AP"><button type="button" class="btn btn-primary">Show Faculties</button></a></link> </td>
            </tr>   
            <tr>
                <td><b>ESP<b></td>
                <td>'.$espDept.'</td>
                <td>johnnn</td>
                <td> <link><a href="teacher.php?dept=ESP"><button type="button" class="btn btn-primary">Show Faculties</button></a></link> </td>
            </tr>
            <tr>
                <td><b>TLE<b></td>
                <td>'.$tleDept.'</td>
                <td>johnnn</td>
                <td> <link><a href="teacher.php?dept=TLE"><button type="button" class="btn btn-primary">Show Faculties</button></a></link> </td>
            </tr>        
                        
        </tbody>
    </table>
</div> 
';

?>