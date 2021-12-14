<?php  

//database connection
$conn = mysqli_connect('localhost', 'root', '', 'sched'); 

//filename 
header('Content-type: application/vnd-ms-excel');
$filename = 'List of Records - ' .date('Y-m-d').'.xls';
header("Content-Disposition:attachment;filename=\"$filename\"");
?>

<!-- Html approach to make xls bordered -->
<table class="table table-bordered">
	<thead>
		<tr>
			<th style="border:2px solid black; text-align: center ">Time</th>
			<th style="border:2px solid black; text-align: center">No. of Hours</th>
			<th style="border:2px solid black; text-align: center">Monday</th>
			<th style="border:2px solid black; text-align: center">Tuesday</th>
			<th style="border:2px solid black; text-align: center">Wednesday</th>
			<th style="border:2px solid black; text-align: center">Thursday</th>
			<th style="border:2px solid black; text-align: center">Friday</th>
		</tr>
	</thead>
	<tbody>
	
	<?php
	// php approach to load all row elements
	$query = "SELECT * FROM try"; 
	$result = mysqli_query($conn, $query);
	
	while($row = mysqli_fetch_assoc($result)){
	?>
	<tr>
			<!-- Printing each row element using php and html -->
			<td style="border:2px solid black; text-align: center"><?php echo $row['time']; ?></td>
			<td style="border:2px solid black; text-align: center"><?php echo $row['hours']; ?></td>
			<td style="border:2px solid black; text-align: center"><?php echo $row['mon']; ?></td>
			<td style="border:2px solid black; text-align: center"><?php echo $row['tue']; ?></td>
			<td style="border:2px solid black; text-align: center"><?php echo $row['wed']; ?></td>
			<td style="border:2px solid black; text-align: center"><?php echo $row['thu']; ?></td>
			<td style="border:2px solid black; text-align: center"><?php echo $row['fri']; ?></td>
		</tr>
		<?php
		}
		?>
	</tbody>
</table>
