<?php

include("dbconfig.php");
//prepare statement
$insertDynamicUser = $conn->prepare("INSERT INTO dynamicUser (username, password) VALUES(?,?)");
$insertDynamicUser->bind_param("ss", $username, $password);

//data's
$username = $_REQUEST["username"];
$password = $_REQUEST["password"];
$insertDynamicUser->execute();

echo "success";
?>