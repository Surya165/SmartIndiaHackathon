<?php session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login or Sign Up</title>
 <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script> 
</head>

<body>	
  
	<form class="form-horizontal" action="index.php" method="POST">
  <div class="form-group">
    <label class="control-label col-sm-2" for="username">Username:</label>
    <div class="col-sm-10">
      <input name="password" type="password" class="form-control" id="username" placeholder="Enter password">
    </div>
  </div>
		<div class="form-group">
    		<label class="control-label col-sm-2" for="email">Email:</label>
    		<div class="col-sm-10">
      		<input name="email" type="email" class="form-control" id="email" placeholder="Enter email">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Password:</label>
    <div class="col-sm-10">
      <input name="password" type="password" class="form-control" id="pwd" placeholder="Enter password">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <div class="checkbox">
        <label><input name="userType" type="radio">Non-Employee </label>
      </div>
    </div>
  </div>
    <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <div class="checkbox">
        <label><input name="userType" type="radio"> Employee </label>
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default" name="signup">Sign Up</button>
    </div>
  </div>
</form> 
</form>
</body>
</html>
<?php
if(isset($_POST['signup']))
{
  echo $_POST['userType'];
}
?>