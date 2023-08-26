<!DOCTYPE html>
<html>
<head>
<title>Room Owner Registration</title>
	<link rel="stylesheet" type="text/css" href="style.css" media="all" />
    <link rel="stylesheet" type="text/css" href="demo.css" media="all" />

</head>
<body>
<div class="container">         
			<header>
				<h1><span>Registration</span> Room Owner</h1>
            </header>       
      <div  class="form">
    		<form id="contactform" name="contactform" method="post"  enctype="multipart/form-data"> 
    			<p class="contact"><label for="name">Name</label></p> 
    			<input id="oname" name="oname" placeholder="First and last name" required="" tabindex="1" type="text">
				
    			 <p class="contact"><label for="address">Address</label></p>
				 <input id="oaddress" name="oaddress" placeholder="address" required="" tabindex="2" type="text">
				 
				 <fieldset>
                 <label>Birthday  </label>
                  <input type="date" name="odob" id="odob" size="30" required="">
              </fieldset>
			  
			  <p class="contact"><label for="phone">Mobile No 1</label></p> 
            <input id="omno1" name="omno1" placeholder="phone number 1" required="" type="tel"  pattern="[0-9]{3}[0-9]{3}[0-9]{4}" title="Enter a Valid Mobile No" maxlength="10"> <br>
			<p class=""><label for="phone">Mobile No 2</label></p> 
            <input id="omno2" name="omno2" placeholder="phone number 2" type="tel"  pattern="[0-9]{3}[0-9]{3}[0-9]{4}" title="Enter a Valid Mobile No"   maxlength="10"> <br>
			
           <select class="select-style gender" name="ogender" required="">
            <option value="select">i am..</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="others">Other</option>
            </select><br><br>
			
    			<p class="contact"><label for="email">Email</label></p> 	
    			<input id="omail" name="omail" placeholder="example@domain.com" type="email"> 
                
				<p class="contact"><label for="photo">Photo</label></p>
				<input type="file" id="ophoto" name="ophoto" accept="images/*" required="">
				
				<p class="contact"><label for="aadhar">Aadhar No</label></p> 
            <input id="oaadhar" name="oaadhar" placeholder="Aadhar No" required="" type="tel"  pattern="[0-9]{4}[0-9]{3}[0-9]{4}" title="Enter a Valid Aadhar No" maxlength="12" > <br>
			
			<p class="contact"><label for="aadharphoto">Aadhar Photo</label></p>
				<input type="file" id="oaadharphoto" name="oaadharphoto" accept="images/*">
				
                <p class="contact"><label for="username">Create a username</label></p> 
    			<input id="ousername" name="ousername" placeholder="username" required="" tabindex="" type="text" required=""> 
    			 
                <p class="contact"><label for="password">Create a password</label></p> 
    			<input type="password" id="opassword" name="opassword" required=""> 
                <p class="contact"><label for="repassword">Confirm your password</label></p> 
    			<input type="password" id="repassword" name="repassword" required=""> 
         
            
            <input class="buttom" name="submit" id="submit" tabindex="5" value="Sign me up!" type="submit"> 	 
   </form> 
</div>      
</div>


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
			header("location: ../login.php");
			echo"<script>alert('data inserted')</script>";
			
	exit();
		}
	}
}
?>
</body>
</html>
