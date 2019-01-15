<?php

//Create Connection
		$conn = mysqli_connect("localhost","root","","attandance");
		if (!$conn)
		{
			die("connection failed: " . mysqli_connect_error());
		} 

	?>