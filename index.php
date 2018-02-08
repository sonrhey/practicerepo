<!DOCTYPE html>
<html>
<head>
	<title>Web Admin</title>
	<link rel="stylesheet" type="text/css" href="bootstrap-css/bootstrap.min.css">
	<script type="text/javascript" src="jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="popper.js"></script>
    <script type="text/javascript" src="bootstrap.min.js"></script>
	<script src="index.js"></script>
</head>
<body>
<div class="container">
<h1>Web Admin</h1>
<h2>Create dynamic User</h2>
<form action="create.php" method="POST" id="submitForm">
	<div class="form-group">
	<input type="text" placeholder="Username" class="form-control" name="username" id="username" required="required">
	</div>
	<div class="form-group">
	<input type="password" placeholder="Password" class="form-control" name="password" id="password">
	</div>
	<div class="form-group">
	<input type="button" class="btn btn-danger btn-block" id="btnGenerate" value="Generate Username and Password">
	</div>
	<div class="form-group">
	<input type="submit" class="btn btn-primary btn-block" name="submit" id="btnSubmit">
	</div>
</form>

</div>
</body>
</html>