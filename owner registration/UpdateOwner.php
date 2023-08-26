<!DOCTYPE html>
<html>
<head>
<title>Room Owner Profile Update</title>
	<link rel="stylesheet" type="text/css" href="style.css" media="all" />
    <link rel="stylesheet" type="text/css" href="demo.css" media="all" />

</head>
<body>
<?php

session_start();
$conn=new mysqli("localhost","root","","room");
if($conn->connect_error) die($conn->connect_error);
     $id=$_SESSION['oid'];

	    $query2="select * from owner_registration where id='$id'";
		$result2=$conn->query($query2);
		if(!$result2) die($conn->error);
		$rows=$result2->num_rows;
		for($j=0;$j<$rows;++$j)
		{
		$result2->data_seek($j);
		$row2=$result2->fetch_array(MYSQLI_ASSOC);
		$name=$row2['name'];
		$address=$row2['address'];
		$dob=$row2['dob'];
		$mobile=$row2['mobile']; 
		$phone=$row2['phone'];
		$gender=$row2['gender'];
		$mail=$row2['mail'];
		$aadharno=$row2['aadharno'];
		$loginid=$row2['loginid'];
		$password=$row2['password'];
		$photo=$row2['photo'];
		$aadharphoto=$row2['aadharphoto'];


		}
				$result2->close();


?>
<div class="container">         
			<header>
				<h1><span>Update Profile</span></h1>
            </header>       
      <div  class="form">
    		<form id="contactform" name="contactform" method="post"  enctype="multipart/form-data" > 
    			<p class="contact"><label for="name">Name</label></p> 
    			<input id="oname" name="oname" placeholder="First and last name"  required="" tabindex="1" type="text" value="<?php echo $name ; ?>">			
    			 <p class="contact"><label for="address">Address</label></p>
				 <input id="oaddress" name="oaddress" placeholder="address" required="" tabindex="2" type="text" value="<?php echo $address; ?>">
				 
				 <fieldset>
                 <label>Birthday  </label>
                  <input type="date" name="odob" id="odob" size="30" required="" value="<?php  echo $dob; ?>">
              </fieldset>
			  
			  <p class="contact"><label for="phone">Mobile No 1</label></p> 
            <input id="omno1" name="omno1" placeholder="phone number 1" required="" type="tel"  pattern="[0-9]{3}[0-9]{3}[0-9]{4}" maxlength="10" title="Enter a Valid Mobile No" value="<?php echo $mobile; ?>"> <br>
			<p class="contact"><label for="phone">Mobile No 2</label></p> 
            <input id="omno2" name="omno2" placeholder="phone number 2" type="tel"  pattern="[0-9]{3}[0-9]{3}[0-9]{4}" title="Enter a Valid Mobile No" maxlength="10" value="<?php  echo $phone ?>"> <br>
			<p class="contact"><label for="gender">Gender</label></p> 
            <input id="ogender" name="ogender" placeholder="Gender" type="text" value="<?php  echo $gender ?>"> <br>		  
			<p class="contact"><label for="email">Email</label></p> 	
    			<input id="omail" name="omail" placeholder="example@domain.com" type="email" value="<?php echo $mail; ?>"> 
                
				<p class="contact"><label for="photo">Photo</label></p>
				<input type="file" id="ophoto" name="ophoto" accept="images/*" required="">
				
				<p class="contact"><label for="aadhar">Aadhar No</label></p> 
            <input id="oaadhar" name="oaadhar" placeholder="Aadhar No" required="" type="tel"  pattern="[0-9]{12}" title="Enter a Valid Aadhar No" maxlength="12" value="<?php echo $aadharno; ?>"> <br>
			
			<p class="contact"><label for="aadharphoto">Aadhar Photo</label></p>
				<input type="file" id="oaadharphoto" name="oaadharphoto" accept="images/*">
				
                <p class="contact"><label for="username">Username</label></p> 
    			<input id="ousername" name="ousername" placeholder="username" required="" tabindex="" type="text" required="" value="<?php echo $loginid; ?>"> 
    			 
                <p class="contact"><label for="password">Password</label></p> 
    			<input type="password" id="opassword" name="opassword" required="" value="<?php echo $password; ?>"> 
                <p class="contact"><label for="repassword">Confirm your Password</label></p> 
    			<input type="password" id="repassword" name="repassword" required="" value="<?php echo $password; ?>"> 
         
            
            <input class="buttom" name="submit" id="submit" tabindex="5" value="Update" type="submit"> 	 
   </form>
		
</div>      
</div>
<?php
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

	
	
	
		//$query="INSERT INTO owner_registration(name,address,dob,mobile,phone,gender,mail,aadharno,loginid,password,photo,aadharphoto) VALUES('$name','$address','$dob','$mno1','$mno2','$gender','$mail','$aadharno','$username','$password','$photo','$aadharphoto')";
		$query="UPDATE owner_registration SET name='$name',address='$address',dob='$dob',mobile='$mno1',phone='$mno2',mail='$mail',gender='$gender',aadharno='$aadharno',name='$username',password='$password',aadharphoto='$aadharphoto',photo='$photo' where name='$username'";
		$result=$conn->query($query);
		if(!$result)
		{
			die("databse access failed:".$conn->error);
		}
		else
		{
			echo"<script>alert('data Updated Successfully')</script>";
			header("location: ../ownerhome.html");
	exit();
		}
	}
}
?>
</body>
</html>
