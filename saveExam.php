<?php
include "dbconfig.php";
//prepare query statements
$insertQuestion = $conn->prepare("INSERT INTO questions (question1, question2, question3, studentid) VALUES(?,?,?,?)");
$selectUser = $conn->prepare("SELECT id FROM questions WHERE studentid = ? ORDER BY id DESC");
$updateUser = $conn->prepare("UPDATE dynamicuser SET availableExam = ? WHERE id = ?");

//bind_parameters
$insertQuestion->bind_param("sssi", $question1, $question2, $question3, $studentId);
$selectUser->bind_param("i", $studentId);
$updateUser->bind_param("ii", $f, $studentId);

//variables
$f = 5;
$question1 = $_REQUEST["question1"];
$choice1_1 = $_REQUEST["choice1_1"];
$choice2_1 = $_REQUEST["choice2_1"];
$choice3_1 = $_REQUEST["choice3_1"];
$question2 = $_REQUEST["question2"];
$choice1_2 = $_REQUEST["choice1_2"];
$choice2_2 = $_REQUEST["choice2_2"];
$choice3_2 = $_REQUEST["choice3_2"];
$question3 = $_REQUEST["question3"];
$choice1_3 = $_REQUEST["choice1_3"];
$choice2_3 = $_REQUEST["choice2_3"];
$choice3_3 = $_REQUEST["choice3_3"];
$studentId = $_REQUEST["optRadio"];

//execute statements
$insertQuestion->execute();
$selectUser->execute();

//get query result
$selectUser->bind_result($questionid);
$selectUser->fetch();

$_questionid = $questionid;
$updateUser->execute();

echo $_questionid;
?>