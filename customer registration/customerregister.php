<!DOCTYPE html>
<html>
<head>
<title>Customer Registration</title>
	<link rel="stylesheet" type="text/css" href="style.css" media="all" />
    <link rel="stylesheet" type="text/css" href="demo.css" media="all" />

</head>
<body>
<div class="container">         
			<header>
				<h1><span>Registration</span> Customer</h1>
            </header>       
      <div  class="form">
    		<form id="contactform" name="contactform" method="post"  enctype="multipart/form-data"> 
    			<p class="contact"><label for="name">Name</label></p> 
    			<input id="name" name="name" placeholder="Full name"  required="" tabindex="1" type="text">
				
    			 <p class="contact"><label for="address">Address</label></p>
				 <input id="address" name="address" placeholder="address" required="" tabindex="2" type="text">
				 <fieldset>
                 <label>Birthday  </label>
                  <input type="date" name="dob" id="dob" size="30" required="">
              </fieldset>
			  
			  <p class="contact"><label for="phone">Mobile No</label></p> 
            <input id="mno" name="mno" placeholder="phone number" required="" type="tel"  pattern="[0-9]{3}[0-9]{3}[0-9]{4}" title="Enter a Valid Mobile No" maxlength="10"> <br>
			
           <select class="select-style gender" name="gender" required="">
            <option value="select">i am..</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="others">Other</option>
            </select><br><br>
			
			<p class="contact"><label for="occupation">Occupation</label></p>
				 <input id="occupation" name="occupation"  placeholder="occupation" required="" type="text">
				 
				 <p class="contact"><label for="univercity">School/University</label></p>
				 <input id="university" name="university"  placeholder="university" required="" type="text">
				 
    			<p class="contact"><label for="email">Email</label></p> 	
    			<input id="mail" name="mail" placeholder="example@domain.com" type="email"> 
                
				<p class="contact"><label for="photo">Photo</label></p>
				<input type="file" id="photo" name="photo" accept="images/*" required="">
				
				
			
				
                <p class="contact"><label for="username">Create a username</label></p> 
    			<input id="username" name="username" placeholder="username" tabindex="" type="text" required=""> 
    			 
                <p class="contact"><label for="password">Create a password</label></p> 
    			<input type="password" id="password" name="password" required=""> 
                <p class="contact"><label for="repassword">Confirm your password</label></p> 
    			<input type="password" id="repassword" name="repassword" required=""> 
         
            
            <input class="buttom" name="submit" id="submit" tabindex="" value="Sign me up!" type="submit"> 	 
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
		$name=$_POST['name'];
		$address=$_POST['address'];
		$dob=$_POST['dob'];
		$mno1=$_POST['mno'];
		$mail=$_POST['mail'];
		$gender=$_POST['gender'];
		$occupation=$_POST['occupation'];
		$university=$_POST['university'];
		
		$username=$_POST['username'];
		$password=$_POST['password'];
		
		
		
	$photo = addslashes(file_get_contents($_FILES["photo"]["tmp_name"]));

	
	
	
		$query="INSERT INTO customer_details(cust_name,cust_dob,cust_address,cust_mobile,cust_email,cust_gender,cust_occupation,cust_university,cust_pic,cust_username,cust_password) VALUES('$name','$dob','$address','$mno1','$mail','$gender','$occupation','$university','$photo','$username','$password')";
		$result=$conn->query($query);
		if(!$result)
		{
			die("databse access failed:".$conn->error);
		}
		else
		{
			
			echo '<script>alert("Registration Successful");</script>';
			header("location: ../clogin.php");
		exit();
		}
		
	}
}
?>
</body>
</html>
