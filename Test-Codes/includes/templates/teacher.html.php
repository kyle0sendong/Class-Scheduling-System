<link rel="stylesheet" type="text/css" href="./includes/templates/css/teacher.css">

<?php 

$output = '

<div class="container">

	<p>'.$dept.' Department</p>

	<form action="" method="post" class="d-flex">
		<input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
		<button class="btn btn-outline-success" type="submit">Search</button>
	</form>


<!-- NEW ENTRY FORM -->
	<div class="add">
		<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">+ Add Teacher</button>
	</div>	     

	<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
		<div class="modal-content">

			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">New Entry</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>

			<form action="teacher.php?search='.$dept.'" method="post">
			<div class="modal-body">

				<!-- Input First Name -->
				<div class="input-group input-group-sm mb-3">
					<span class="input-group-text">First Name</span>
					<input type="text" aria-label="First name" name="firstName" class="form-control" placeholder="Juan" required><br>
				</div>

				<!-- Input Last Name -->
				<div class="input-group input-group-sm mb-3">
					<span class="input-group-text">Last name</span>
					<input type="text" aria-label="Last name" name="lastName" class="form-control" placeholder="dela Cruz" required><br>
				</div>

				<!-- Input Department -->
				<div class="input-group input-group-sm mb-3">
					<span class="input-group-text">Department</span>
					<select name="dept">
						<option value="'.$dept.'">'.$dept.'</option>
					</select>
				</div>

				<!-- Input Advising section -->
				<div class="input-group input-group-sm mb-3">
					<span class="input-group-text">Adviser of </span>
					<select name="advising">					
';
					//retrieve grade and section for the form
					for($i = 7; $i <= 10; $i++) {
						$gradeLevel = retrieveAllId($pdo, 'grade_level', 'grade', $i);

						foreach($gradeLevel as $gradeSection) {
							$output .= '
								<option value="'.$gradeSection['id'].'">
								Grade '.$gradeSection['grade']. ' - ' . $gradeSection['section'] .'
								</option>
							';
						}
					}

$output .= '
					</select>
				</div>

				<!-- Input Department -->
				<div class="input-group input-group-sm mb-3">
					<span class="input-group-text">Department Head of </span>
					<select name="">
						<option value="tbd">To be decided</option>
						<option value="'.$dept.'">'.$dept.'</option>
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
<!-- END OF NEW ENTRY FORM-->



<!-- DISPLAY ALL FACULTY IN A TABLE -->
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

		<tbody> 
';

			
		$result = retrieveAllId($pdo, 'teacher', 'dept', $dept);

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
							<!-- HEADER -->
						<div class="modal-header">
							<h5 class="modal-title" id="a'.$row['id'].'">Edit Entry</h5>
							<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
						</div>
							
						<form action="teacher.php?search='.$dept.'" method="post">
						<div class="modal-body">

								<!-- FIRST NAME INPUT -->
							<div class="input-group input-group-sm mb-3">
								<span class="input-group-text">First Name</span>
								<input type="text" aria-label="First name" name="firstName" class="form-control" value="'.$row['firstName'].'" required><br>
							</div>
								<!-- LAST NAME INPUT -->
							<div class="input-group input-group-sm mb-3">
								<span class="input-group-text">Last name</span>
								<input type="text" aria-label="Last name" name="lastName" class="form-control" value="'.$row['lastName'].'" required><br>
							</div>

								<!--DEPARTMENT INPUT -->
							<div class="input-group input-group-sm mb-3">
								<span class="input-group-text">Department</span>
								<select name="dept">
									<option value="'.$dept.'" selected>'.$dept.'</option>
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

								<!-- ADVISING SECTION FORM -->
							<div class="input-group input-group-sm mb-3">
								<span class="input-group-text">Adviser of </span>
								<select name="advising">
';

						//retrieve grade and section for the form
						for($i = 7; $i <= 10; $i++) {
							$gradeLevel = retrieveAllId($pdo, 'grade_level', 'grade', $i);

							foreach($gradeLevel as $gradeSection) {
								$output .= '
									<option value="'.$gradeSection['id'].'">
									Grade '.$gradeSection['grade']. ' - ' . $gradeSection['section'] .'
									</option>
								';
							}
						}

$output .= '								
								</select>
							</div>

							<!--Department Head option-->
							<div class="input-group input-group-sm mb-3">
								<span class="input-group-text">Department Head of </span>
								<select name="">
									<option value="tbd">To be decided</option>
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

				<form action="teacher.php?search='.$dept.'" method="post" style="display: inline;margin:0; padding:0">
					<input type="hidden" name="id" value="'.$row['id'].'">
					<button type="submit" class="btn btn-danger" name="deleteEntry" value="deleteEntry">Delete</button>
				</form>

				</td>
			</tr>
';
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

*/
?>

