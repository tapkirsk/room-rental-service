<!DOCTYPE html>
<html>
<head>
<title>Customer's Profile Update</title>
	<link rel="stylesheet" type="text/css" href="style.css" media="all" />
    <link rel="stylesheet" type="text/css" href="demo.css" media="all" />

</head>
<body>
<?php

session_start();
$conn=new mysqli("localhost","root","","room");
if($conn->connect_error) die($conn->connect_error);
     $id=$_SESSION['cid'];

	    $query2="select * from customer_details where cust_id='$id'";
		$result2=$conn->query($query2);
		if(!$result2) die($conn->error);
		$rows=$result2->num_rows;
		for($j=0;$j<$rows;++$j)
		{
		$result2->data_seek($j);
		$row2=$result2->fetch_array(MYSQLI_ASSOC);
		$name=$row2['cust_name'];
		$address=$row2['cust_address'];
		$dob=$row2['cust_dob'];
		$mobile=$row2['cust_mobile']; 
		$gender=$row2['cust_gender'];
		$mail=$row2['cust_email'];
		$loginid=$row2['cust_username'];
		$password=$row2['cust_password'];
		$photo=$row2['cust_pic'];
		$occupation=$row2['cust_occupation'];
		$university=$row2['cust_university'];


		}
				$result2->close();



?>

<div class="container">         
			<header>
				<h1><span>Update Profile</span> Customer</h1>
            </header>       
      <div  class="form">
    		<form id="contactform" name="contactform" method="post"  enctype="multipart/form-data"> 
    			<p class="contact"><label for="name">Name</label></p> 
    			<input id="name" name="name" placeholder="Full name" required="" tabindex="1" type="text" value="<?php echo $name; ?>">
				
    			 <p class="contact"><label for="address">Address</label></p>
				 <input id="address" name="address" placeholder="address" required="" tabindex="2" type="text" value="<?php echo $address; ?>">
				 <fieldset>
                 <label>Birthday  </label>
                  <input type="date" name="dob" id="dob" size="30" required="" value="<?php echo $dob; ?>">
              </fieldset>
			  
			  <p class="contact"><label for="phone">Mobile No</label></p> 
            <input id="mno" name="mno" placeholder="phone number" required=""type="tel"  pattern="[0-9]{3}[0-9]{3}[0-9]{4}" title="Enter a Valid Mobile No" maxlength="10" value="<?php echo $mobile; ?>"> <br>
			  <p class="contact"><label for="gender">Gender</label></p> 
            <input id="gender" name="gender" placeholder="gender" required="" type="text" value="<?php echo $gender; ?>"> <br>
			
           <br>
			
			<p class="contact"><label for="occupation">Occupation</label></p>
				 <input id="occupation" name="occupation" placeholder="occupation" required="" type="text" value="<?php echo $occupation; ?>">
				 
				 <p class="contact"><label for="univercity">School/University</label></p>
				 <input id="univercity" name="univercity" placeholder="university" required="" type="text" value="<?php echo $university; ?>">
				 
    			<p class="contact"><label for="email">Email</label></p> 	
    			<input id="mail" name="mail" placeholder="example@domain.com" type="email" value="<?php echo $mail; ?>"> 
                
				<p class="contact"><label for="photo">Photo</label></p>
				<input type="file" id="photo" name="photo" accept="images/*" required="">
				
				
			
				
                <p class="contact"><label for="username">Create a username</label></p> 
    			<input id="username" name="username" placeholder="username" tabindex="" type="text" required="" value="<?php echo $loginid; ?>"> 
    			 
                <p class="contact"><label for="password">Create a password</label></p> 
    			<input type="password" id="password" name="password" required="" value="<?php echo $password; ?>"> 
                <p class="contact"><label for="repassword">Confirm your password</label></p> 
    			<input type="password" id="repassword" name="repassword" required="" value="<?php echo $password; ?>"> 
         
            
            <input class="buttom" name="submit" id="submit" tabindex="" value="Update" type="submit"> 	 
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
		$university=$_POST['univercity'];		
		$username=$_POST['username'];
		$password=$_POST['password'];
		
		
		
	$photo = addslashes(file_get_contents($_FILES["photo"]["tmp_name"]));

	
	
	
		//$query="INSERT INTO customer_details(cust_name,cust_dob,cust_address,cust_mobile,cust_email,cust_gender,cust_occupation,cust_university,cust_pic,cust_username,cust_password) VALUES('$name','$dob','$address','$mno','$mail','$gender','$occupation','$university','$photo','$username','$password')";
		$query="UPDATE customer_details SET cust_username='$name',cust_address='$address',cust_dob='$dob',cust_mobile='$mno1',cust_email='$mail',cust_gender='$gender',cust_occupation='$occupation',cust_university='$university',cust_username='$username',cust_password='$password',cust_pic='$photo' where cust_username='$username'";
		
		$result=$conn->query($query);
		if(!$result)
		{
			die("databse access failed:".$conn->error);
		}
		else
		{
			echo"<script>alert('Registration Successful');</script>";
			header("location: ../customerhome.html");
	exit();
		}
	}
}
?>
</body>
</html>
