
<?php
// connect to the database
include('connect.php');

// get the records from the database
$sql = "SELECT emp_attandance.emp_id, emp_details.emp_name, emp_attandance.entry_time, emp_attandance.exit_time FROM emp_attandance,emp_details WHERE emp_attandance.emp_id AND emp_details.emp_id;  ";
$result = mysqli_query($conn, $sql) or die (mysqli_error($conn));

$arr=array();


while ($row = mysqli_fetch_array($result))
{
	$arr = array("emp_id");
	array_push($arr,"entry_time","exit_time");

}
//$arr = array('emp_id' => 1, 'emp_name' => 'kv', 'entry' => 10.00, 'exit' =>7.30);
//echo json_encode($arr);

mysqli_close($conn);
?>
