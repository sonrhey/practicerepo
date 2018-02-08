<?php
include("dbconfig.php");

$queryDynamicUser = $conn->prepare("SELECT * FROM dynamicUser WHERE username = ? AND password = ?");
$queryDynamicUser->bind_param("ss", $username, $password);

$username = $_REQUEST["username"];
$password = $_REQUEST["password"];
$queryDynamicUser->execute();
$result= $queryDynamicUser->get_result();
if($result->num_rows>0){
while($row = $result->fetch_assoc()){
	echo 1;
}
}else{
	echo 0;
}
?>