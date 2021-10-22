<?php
define('HOST', 'localhost');
define('USERNAME', 'root');
define('PASSWORD', '');
define('DATABASE', 'baitaplon1');

function execute($sql) {
	
	$conn = mysqli_connect(HOST, USERNAME, PASSWORD, DATABASE);
	
	$result=mysqli_query($conn, $sql);
	
	
    mysqli_close($conn);
    return $result;
}
function select_list($sql) {
	
	$con = mysqli_connect(HOST, USERNAME, PASSWORD, DATABASE);

	$result = mysqli_query($con, $sql);
	$data   = [];

	if ($result != null) {
		while ($row = mysqli_fetch_array($result)) {
			$data[] = $row;
		}
	}

	
	mysqli_close($con);

	return $data;
}

function select_one($sql) {

	$con = mysqli_connect(HOST, USERNAME, PASSWORD, DATABASE);
	
	$result = mysqli_query($con, $sql);
	$row    = null;
	if ($result != null) {
		$row = mysqli_fetch_array($result);
	}
	
	mysqli_close($con);

	return $row;
}

?>