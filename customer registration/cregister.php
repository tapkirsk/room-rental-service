

<?php
$conn=new mysqli("localhost","root","","room");
if($conn->connect_error) die($conn->connect_error);
	
if($_SERVER['REQUEST_METHOD']=='POST')
{
	if(isset($_POST['submit']))
	{
		$name=$_POST['oname'];
		$address=$_POST['oaddress'];
		$dob=$_POST['odob'];
		$mno1=$_POST['omno1'];
		$mno2=$_POST['omno2'];
		$mail=$_POST['omail'];
		$gender=$_POST['ogender'];
		
		
		$aadharno=$_POST['oaadhar'];
		
		$username=$_POST['ousername'];
		$password=$_POST['opassword'];
		
$aadharphoto = addslashes(file_get_contents($_FILES["oaadharphoto"]["tmp_name"]));
		
		
	$photo = addslashes(file_get_contents($_FILES["ophoto"]["tmp_name"]));

	
	
	
		$query="INSERT INTO owner_registration(name,address,dob,mobile,phone,gender,mail,aadharno,loginid,password,photo,aadharphoto) VALUES('$name','$address','$dob','$mno1','$mno2','$gender','$mail','$aadharno','$username','$password','$photo','$aadharphoto')";
		$result=$conn->query($query);
		if(!$result)
		{
			die("databse access failed:".$conn->error);
		}
		else
		{
			echo"<script>alert('Details Uploaded successfully')</script>";
header("Location: contact.html");
	exit();    		}
	}
}
?>