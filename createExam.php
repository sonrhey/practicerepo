<!DOCTYPE html>
<html>
<head>
	<title>Web Admin</title>
	<link rel="stylesheet" type="text/css" href="bootstrap-css/bootstrap.min.css">
	<script type="text/javascript" src="jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="popper.js"></script>
    <script type="text/javascript" src="bootstrap.min.js"></script>
    <script type="text/javascript" src="loadStudents.js"></script>
    <script type="text/javascript" src="createExam.js"></script>
</head>
<body>
<style>
.choices {
margin: 15px;
}

</style>
<form action="saveExam.php" method="POST" id="submitForm">
<div class="container"><h1>Examiner Admin</h1></div>
<hr>
<div class="container">
<h3>Create Exam</h3>
	<div class="form-group">
	<input type="text" placeholder="Question 1" class="form-control" name="question1" id="question1">
		<div class="choices">
			<h5>Choices</h5>
			<input type="text" placeholder="Choice 1" class="form-control" name="choice1_1">
			<input type="text" placeholder="Choice 2" class="form-control" name="choice2_1">
			<input type="text" placeholder="Choice 3" class="form-control" name="choice3_1">
		</div>
	</div>
	<div class="form-group">
	<input type="text" placeholder="Question 2" class="form-control" name="question2" id="question2">
	<div class="choices">
			<h5>Choices</h5>
			<input type="text" placeholder="Choice 1" class="form-control" name="choice1_2">
			<input type="text" placeholder="Choice 2" class="form-control" name="choice2_2">
			<input type="text" placeholder="Choice 3" class="form-control" name="choice3_2">
	</div>
	</div>
	<div class="form-group">
	<input type="text" placeholder="Question 3" class="form-control" name="question3" id="question3">
	<div class="choices">
			<h5>Choices</h5>
			<input type="text" placeholder="Choice 1" class="form-control" name="choice1_3">
			<input type="text" placeholder="Choice 2" class="form-control" name="choice2_3">
			<input type="text" placeholder="Choice 3" class="form-control" name="choice3_3">
	</div>
	</div>
</div>
<hr>
<div class="container">
	<div class="form-group">
	<h4>Students List</h4>
	<table class="table table-striped">
		<thead>
			<tr>
				<th>Students ID</th>
				<th>Students Username</th>
				<th>Students Password</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody id="tableData">		
		</tbody>
	</table>
	</div>
	<div class="form-group">
	<input type="submit" class="btn btn-primary btn-block" value="Create" name="submit" id="btnSubmit">
	</div>
</div>
</form>
</body>
</html>