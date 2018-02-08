<?php
include "dbconfig.php";
$queryUsers = $conn->prepare("SELECT * FROM dynamicUser");
$queryUsers->execute();
$variable = [];
$result = $queryUsers->get_result();
if($result->num_rows>0){

	while($row=$result->fetch_assoc()){
		$variable[] = $row;
	}

	echo json_encode($variable);
}
?>