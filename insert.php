<?php 
		
 		include("connect.php");
		//Select Database
		$db_select = mysqli_select_db($conn, "attandance");
		if(!$db_select){
			die("Database selection failed" . mysqli_connect_error());
		}

		if($_POST)
		{	
			$emp_id = $_POST['emp_id'];
			// $emp_name = $_POST['emp_name'];
	 		$entry_time = $_POST['entry_time'];
	 		$exit_time = $_POST['exit_time'];

			$sql = "INSERT INTO emp_attandance (emp_id, entry_time, exit_time) VALUES ('$emp_id','$entry_time','$exit_time')"; 
		
		if($conn->query($sql) === TRUE)
		{
			echo "New record created successfully";
		}
		else{
			echo "Error: ". $sql . "<br>" . $conn->error;
		}
		$conn->close();
	}
	?>
