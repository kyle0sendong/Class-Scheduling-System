<?php  
	$username=$_POST['username'];
	$password=$_POST['password'];

	$conn= new mysqli('localhost','root','','sample1');
	if($conn->connect_error){
		die('Connection Failed: '.$conn->connect_error);
	}else{
		$stmt=$conn->prepare("insert into registration(username,password)values(?,?)");
		$stmt->bind_param("ss",$username,$password);
		$stmt->execute();
		echo"Login Success...";
		$stmt->close();
		$conn->close();
	}
?>