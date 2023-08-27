<html>
<head>
	<title> LOGIN PAGE</title>
	<link rel="stylesheet" type="text/css" href="css/login style.css">
</head>
<body>
<div class="box">
	<img src="loginlogo.png" class="avatar">
	<h1><font color="Red">Login here</font></h1>
	<form name="login" onsubmit="check(this)" method="post" action="">
		<input type="text" name="userid" placeholder="Enter Username">
		<input type="password" name="pwd" placeholder="Enter Password">
		<input type="submit" name="submit" value="Login" onclick="return check(this.form)">
		<input type="button" name="cancel" value="Cancel" onclick="index.html"> 
		<a href="s3.html">Forgot Password</a><br>
		Not Registered yet ? <a href="owner registration/oregister.php"> Sign Up</a>
		<br><br>
		<input type="button" class="button" name="home" value="Back To Home" onclick="go()">
		<br>
		
	</form>
</div>
<script language="javascript">
function check(form)
{

if(form.userid.value == "" )
{
	window.alert("Please enter Username");
	return false;
	
}
if(form.pwd.value == "")
{
	window.alert("Please enter Password");
	return false;

}
}
function go()
{
window.close('login.php');
window.open("index.html");
return true;
}

</script>
<?php
 session_start();
$conn=new mysqli("localhost","root","","room");
if($conn->connect_error) die($conn->connect_error);
if($_SERVER['REQUEST_METHOD']=='POST')
	
	{
		$username=$_POST['userid'];
	$password=$_POST['pwd'];
		
		if(isset($_POST['submit']))
		{
			
			$query="select * from owner_registration where loginid='$username' and password='$password'";
			$result=$conn->query($query);
			if(!$result) die($conn->connect_error);
			
			$row=$result->num_rows;
            if($row == 1)
			 {
				 for($j=0;$j<$row;++$j)
				 {
					 $result->data_seek($j);
					 $ro=$result->fetch_array(MYSQLI_ASSOC);
					 $_SESSION["oid"]=$ro['id'];
					 
				 }
				$result->close();
				$conn->close();
				
    header("Location: ownerhome.html");
	exit();
			 
             }
            else
			{
				echo"<script> window.alert('Username or password is incorrect');</script>";
			}

		}
	}



?>



</body>
</html>