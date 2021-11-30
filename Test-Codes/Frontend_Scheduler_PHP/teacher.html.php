<!DOCTYPE html>
<html lang="en">
  	<head>
    	<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
    	<link rel="stylesheet" type="text/css" href="css/teacher.css">

    	<!-- Bootstrap CSS -->
    	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		<link rel="stylesheet" href="css/all.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,200;0,300;0,400;0,600;1,100&display=swap" rel="stylesheet">
  	</head>
    	
	<div class="container">

		<p>TEACHER MANAGEMENT</p>

		<form class="d-flex">
			<input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
			<button class="btn btn-outline-success" type="submit">Search</button>
		</form>

		<div class="add">
			<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">+Add New</button>
		</div>	     
	
		<!-- Modal -->
		<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">

			<div class="modal-dialog">
			<div class="modal-content">

				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">New Entry</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>

				<div class="modal-body">

					<div class="input-group input-group-sm mb-3">
						<span class="input-group-text" id="inputGroup-sizing-sm">ID No.</span><br>
						<input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"><br>
					</div>

					<div class="input-group input-group-sm mb-3">
						<span class="input-group-text">First and last name</span>
						<input type="text" aria-label="First name" class="form-control">
						<input type="text" aria-label="Last name" class="form-control"><br>
					</div>

					<div class="input-group input-group-sm mb-3">
						<span class="input-group-text" id="inputGroup-sizing-sm">Department ID</span>
						<input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"><br>
					</div>

					<div class="input-group input-group-sm mb-3">
						<span class="input-group-text" id="inputGroup-sizing-sm">Total Hours</span>
						<input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"><br>
					</div>

					<div class="input-group input-group-sm mb-3">
						<span class="input-group-text" id="inputGroup-sizing-sm">Faculty Status</span>
						<input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"><br>
					</div>

					<div class="input-group input-group-sm mb-3">
						<span class="input-group-text" id="inputGroup-sizing-sm">Email</span>
						<input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"><br>
					</div>

				</div>

				<div class="modal-footer">
					<button type="button" class="btn btn-primary">Save changes</button>
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
				</div>

			</div>
			</div>
		</div>   

		<div class="table">
		<table class="table table-hover">
			<thead>
				<tr>
					<th scope="col">#</th>
					<th scope="col">ID Number</th>
					<th scope="col">First</th>
					<th scope="col">Last</th>
					<th scope="col">Department ID</th>
					<th scope="col">Total Hours</th>
					<th scope="col">Faculty Status</th>
					<th scope="col">Action</th>
				</tr>
			</thead>

			<tbody>
				<tr>
					<th scope="row">1</th>
					<td>math_1</td>
					<td>Anne</td>
					<td>Cruz</td>
					<td>math</td>
					<td>2</td>
					<td>Full Time</td>
					<td>
					<button type="button" class="btn btn-primary">View</button>
					<button type="button" class="btn btn-warning">Edit</button>
					<button type="button" class="btn btn-danger">Delete</button>
					</td>
				</tr>
				<tr>
					<th scope="row">2</th>
					<td>physics_1</td>
					<td>Ramon</td>
					<td>Reyes</td>
					<td>science</td>
					<td>3</td>
					<td>Full Time</td>
					<td>
					<button type="button" class="btn btn-primary">View</button>
					<button type="button" class="btn btn-warning">Edit</button>
					<button type="button" class="btn btn-danger">Delete</button>
					</td>
				</tr>


			</tbody> 
		</table>


			<div class="next-button">
				<button type="button" class="btn btn-light"><i class="fas fa-chevron-left"></i>Previous</button>
				<button type="button" class="btn btn-light">Next<i class="fas fa-chevron-right"></i></button>
			</div>
		</div>
		
	</div>

	<?php include __DIR__ . '/../includes/templates/layout.html.php'?>

	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

	

</html>
