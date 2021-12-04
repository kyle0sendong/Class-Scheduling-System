<link rel="stylesheet" type="text/css" href="./includes/templates/css/teacher.css">

<?php 

$output = '

<div class="container">

	<p>Faculty Management</p>

	<form action="" method="post" class="d-flex">
		<input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
		<button class="btn btn-outline-success" type="submit">Search</button>
	</form>

	<div class="add">
		<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">+ Add Teacher</button>
	</div>	     

	<!-- Modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">

		<div class="modal-dialog">
		<div class="modal-content">

			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">New Entry</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>

			<form action="teacher.php" method="post">
			<div class="modal-body">
				<div class="input-group input-group-sm mb-3">
					<span class="input-group-text">First Name</span>
					<input type="text" aria-label="First name" name="firstName" class="form-control" placeholder="Juan" required><br>
				</div>

				<div class="input-group input-group-sm mb-3">
					<span class="input-group-text">Last name</span>
					<input type="text" aria-label="Last name" name="lastName" class="form-control" placeholder="dela Cruz" required><br>
				</div>

				<div class="input-group input-group-sm mb-3">
					<span class="input-group-text">Department</span>
					<select name="dept">
						<option value="Mathematics">Mathematics</option>
						<option value="Science">Science</option>
						<option value="English">English</option>
						<option value="Filipino">Filipino</option>
						<option value="MAPEH">MAPEH</option>
						<option value="AP">AP</option>
						<option value="ESP">ESP</option>
						<option value="TLE">TLE</option>
					</select>
				</div>
			</div>

			<div class="modal-footer">
				<button type="submit" class="btn btn-primary" name="newEntry" value="newEntry">Save changes</button>
				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
			</div>
			</form>	

		</div>
		</div>
	</div>   

	<div class="table">
	<table class="table table-hover">
		<thead>
			<tr>
				<th scope="col">First </th>
				<th scope="col">Last</th>
				<th scope="col">Department</th>
				<th scope="col">Teaching Hours</th>
			</tr>
		</thead>

		<tbody> ';

			
		$result = retrieveAll($pdo, 'teacher');

		foreach($result as $row) {
			$output .= '
			<tr>
			<td> '.$row['firstName'].' </td>
			<td> '.$row['lastName'].' </td>
			<td> '.$row['dept'].' </td>
			<td> 1 </td>
			<td>
			<button type="button" class="btn btn-primary">View Schedule</button>
			
			<button type="submit" class="btn btn-warning" name="updateEntry" value="updateEntry" data-bs-toggle="modal" data-bs-target="#a'.$row['id'].'">Edit</button>
			
			<!-- SHOW FORM WHEN edit IS CLICKED -->
			<div class="modal fade" id="a'.$row['id'].'" tabindex="-1" aria-labelledby="a'.$row['id'].'" aria-hidden="true">

				<div class="modal-dialog">
				<div class="modal-content">

					<div class="modal-header">
						<h5 class="modal-title" id="a'.$row['id'].'">Edit Entry</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>

					<form action="teacher.php" method="post">
					<div class="modal-body">
						<div class="input-group input-group-sm mb-3">
							<span class="input-group-text">First Name</span>
							<input type="text" aria-label="First name" name="firstName" class="form-control" value="'.$row['firstName'].'" required><br>
						</div>

						<div class="input-group input-group-sm mb-3">
							<span class="input-group-text">Last name</span>
							<input type="text" aria-label="Last name" name="lastName" class="form-control" value="'.$row['lastName'].'" required><br>
						</div>

						<div class="input-group input-group-sm mb-3">
							<span class="input-group-text">Department</span>
							<select name="dept">
								<option value="Mathematics">Mathematics</option>
								<option value="Science">Science</option>
								<option value="English">English</option>
								<option value="Filipino">Filipino</option>
								<option value="MAPEH">MAPEH</option>
								<option value="AP">AP</option>
								<option value="ESP">ESP</option>
								<option value="TLE">TLE</option>
							</select>
						</div>

					</div>

					<div class="modal-footer">
						<input type="hidden" name="id" value="'.$row['id'].'">
						<button type="submit" class="btn btn-primary" name="updateEntry" value="updateEntry">Save changes</button>
						<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
					</div>
					</form>	

				</div>
				</div>
			</div>   



			<form action="teacher.php" method="post" style="display: inline;margin:0; padding:0">
				<input type="hidden" name="id" value="'.$row['id'].'">
				<button type="submit" class="btn btn-danger" name="deleteEntry" value="deleteEntry">Delete</button>
			</form>

			</td>

			</tr>';

		}
		
		$output .= '
		</tbody>

	</table>


		<div class="next-button">
			<button type="button" class="btn btn-light"><i class="fas fa-chevron-left"></i>Previous</button>
			<button type="button" class="btn btn-light">Next<i class="fas fa-chevron-right"></i></button>
		</div>
	</div>
	
</div>
';




/* 
modal 

<!-- <div class="input-group input-group-sm mb-3">
	<span class="input-group-text" id="inputGroup-sizing-sm">ID No.</span><br>
	<input type="text" name="idNum" aria-label="Sizing example input" class="form-control" aria-describedby="inputGroup-sizing-sm" placeholder="id" required><br>
</div> -->

<!-- <div class="input-group input-group-sm mb-3">	display DEPARTMENT
					<span class="input-group-text" id="inputGroup-sizing-sm">Department ID</span>
					<input type="text" class="form-control" name="dept" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="Mathematics" required><br>
</div> -->
 
<!-- <div class="input-group input-group-sm mb-3"> ----total hours is computed, increments by # every subject----
	<span class="input-group-text" id="inputGroup-sizing-sm">Total Hours</span>
	<input type="text" class="form-control" name="totalHours" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"><br>
</div> -->

<!-- <div class="input-group input-group-sm mb-3"> ----not sure if required STATUS----
	<span class="input-group-text" id="inputGroup-sizing-sm">Faculty Status</span>
	<input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"><br>
</div> -->

<!-- <div class="input-group input-group-sm mb-3">   ----not sure if required EMAIL-----
	<span class="input-group-text" id="inputGroup-sizing-sm">Email</span>
	<input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"><br>
</div> -->

*/
?>

