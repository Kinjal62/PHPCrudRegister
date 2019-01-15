<html>
	<head>
		<title>Entry-Exit List</title>
	</head>
	<body>
		<div class="container">
			<div class="row">
					<form class="form-inline" action="dbtable.php" method="POST">

						
						<div class="col-sm-3">
							<div class="form-group">
								<label class="control-label">EMP_ID:</label>
						<input type="text" name="emp_id" 	placeholder="Enter Your Id" class="form-control" required>
						</div>
						</div><br>
					
				<!--<div class="col-sm-3">
						<div class="form-group">
						<label class="control-label">EMP_Name:</label>
						<input type="text" name="emp_name" 	placeholder="Enter Your Name" class="form-control" required>
						</div>
					</div><br>-->
				
					<div class='col-sm-3'>
						<div class="form-group">
							<label class="control-label">ENTRY:</label>
						<input type="datetime-local" name="entry_time" placeholder="Enter in time" class="form-control" required>
						</div>
					</div><br>
				
					<div class='col-sm-3'>
						<div class="form-group">
							<label class="control-label">EXIT:</label>
						<input type="datetime-local" name="exit_time" placeholder="Enter out time" class="form-control" required>
						</div>
					</div><br>

				<button type="submit" name="btn" class="btn btn-default">Submit</button>
				</form>
			</div>
		</div>
		<?php
	include("dbtable.php");

	?>
	</body>
</html>