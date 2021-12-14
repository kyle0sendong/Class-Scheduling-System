<?php  
 
//Database manipulation para malagyan ng whitespaces

//Set up connection
$conn = mysqli_connect('localhost', 'root', '', 'sched'); //Change database name

$filename = 'List of Records - ' .date('Y-m-d').'.csv';

$sql = "SELECT * FROM try ORDER BY time"; //Change table name

$result = mysqli_query($conn, $sql);

$array = array();

$file = fopen($filename, 'w');
$array = array("Time","No. of Hours","Mon","Tue","Wed","Thu","Fri");
fputcsv($file,$array);


//Change variables
while($row = mysqli_fetch_array($result)){

	$time = $row['time'];
	$hours = $row['hours'];
	$day = $row['day'];
	$section = $row['section'];

	$array = array($time,$hours,$day,$section);
	fputcsv($file,$array);
}

fclose($file);

header("Content-Description: File Transfer");
header("Content-Disposition: Attachment; filename=$filename");
header("Content-Type: application/csv;");


readfile($filename);
unlink($filename);
exit()
?>

