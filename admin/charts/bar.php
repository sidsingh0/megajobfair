<?php
header('Content-Type: application/json');

include('../../connect.php');

$sqlQuery = "SELECT * FROM companies ORDER BY maximum_ctc DESC LIMIT 5";

$result = mysqli_query($conn,$sqlQuery);

$data = array();
foreach ($result as $row) {
	$data[] = $row;
}

mysqli_close($conn);

echo json_encode($data);
?>