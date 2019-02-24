<?php
session_start();
function login($email,$password)
{
	include "connect.php";
	$query = "select username,userType from users where email ='".$email."' and password='".$password."';";
	$row = mysqli_query($con,$query);
	$res = mysqli_fetch_assoc($row);
	$num = mysqli_num_rows($row);
	if($num >= 1)
	{
		$_SESSION['username'] = $res['username'];
		$_SESSION['userType'] = $res['userType'];
		return True;
	}
	return False;
}
