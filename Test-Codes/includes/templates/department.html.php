<link rel="stylesheet" type="text/css" href="./includes/templates/css/department.css">

<?php 

$mathCount = totalId($pdo, 'teacher', 'dept', 'Mathematics');
$sciCount = totalId($pdo, 'teacher', 'dept', 'Science');
$engCount = totalId($pdo, 'teacher', 'dept', 'English');
$filCount = totalId($pdo, 'teacher', 'dept', 'Filipino');
$mapehCount = totalId($pdo, 'teacher', 'dept', 'MAPEH');
$apCount = totalId($pdo, 'teacher', 'dept', 'AP');
$espCount = totalId($pdo, 'teacher', 'dept', 'ESP');
$tleCount = totalId($pdo, 'teacher', 'dept', 'TLE');

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
                <td>'.$mathCount.'</td>
                <td>johnnn</td>
                <td> <link><a href="teacher.php?search=Mathematics"><button type="button" class="btn btn-primary">Show Faculties</button></a></link> </td>
            </tr>

            <tr>
                <td><b>Science<b></td>
                <td>'.$sciCount.'</td>
                <td>johnnn</td>
                <td> <link><a href="teacher.php?search=Science"><button type="button" class="btn btn-primary">Show Faculties</button></a></link> </td>
            
            <tr>
                <td><b>English<b></td>
                <td>'.$engCount.'</td>
                <td>johnnn</td>
                <td> <link><a href="teacher.php?search=English"><button type="button" class="btn btn-primary">Show Faculties</button></a></link> </td>
            </tr>

            <tr>
                <td><b>Filipino<b></td>
                <td>'.$filCount.'</td>
                <td>johnnn</td>
                <td> <link><a href="teacher.php?search=Filipino"><button type="button" class="btn btn-primary">Show Faculties</button></a></link> </td>
            </tr>
            <tr>
                <td><b>MAPEH<b></td>
                <td>'.$mapehCount.'</td>
                <td>johnnn</td>
                <td> <link><a href="teacher.php?search=MAPEH"><button type="button" class="btn btn-primary">Show Faculties</button></a></link> </td>
            </tr>
            <tr>
                <td><b>AP<b></td>
                <td>'.$apCount.'</td>
                <td>johnnn</td>
                <td> <link><a href="teacher.php?search=AP"><button type="button" class="btn btn-primary">Show Faculties</button></a></link> </td>
            </tr>   
            <tr>
                <td><b>ESP<b></td>
                <td>'.$espCount.'</td>
                <td>johnnn</td>
                <td> <link><a href="teacher.php?search=ESP"><button type="button" class="btn btn-primary">Show Faculties</button></a></link> </td>
            </tr>
            <tr>
                <td><b>TLE<b></td>
                <td>'.$tleCount.'</td>
                <td>johnnn</td>
                <td> <link><a href="teacher.php?search=TLE"><button type="button" class="btn btn-primary">Show Faculties</button></a></link> </td>
            </tr>        
                        
        </tbody>
    </table>
</div> 
';

?>