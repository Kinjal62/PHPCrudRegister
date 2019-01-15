	<?php
		include("connect.php");
		
		$sql = "SELECT emp_attandance.emp_id, emp_details.emp_name, emp_attandance.entry_time, emp_attandance.exit_time FROM emp_attandance INNER JOIN emp_details ON emp_attandance.emp_id=emp_details.emp_id;";

		if(isset($_POST))
		{
			$emp_id = $_POST['emp_id'];
			$emp_name = $_POST['emp_name'];
			$entry_time = $_POST['entry_time'];
			$exit_time = $_POST['exit_time'];
		
		$result = mysqli_query($conn, $sql);
		$num_rows = mysqli_num_rows($result);

		if ($num_rows > 0) 
		// build a table to show results
		{
			echo "<table border='1'>";
			echo "<tr>";
			
			echo "<th>emp_id</th>";
			echo "<th>emp_name</th>";
			echo "<th>Entry_time</th>"; 
			echo "<th>Exit_time</th>";
			echo "</tr>";
			$num_rows=0;
			while($row = mysqli_fetch_array($result))
			{
				echo "<tr>";
				
				echo "<td>" . $row['emp_id'] . "</td>";
				echo "<td>" . $row['emp_name'] . "</td>";
				echo "<td>" . $row['entry_time'] . "</td>";
				echo "<td>" . $row['exit_time'] . "</td>";
				echo "</tr>";
			}   
			echo "</table>";
		} else{
			echo "No rows returned.";
		}
		mysqli_close($conn);
	}
	?>