<html>
<body>

<input type="text" name="t" />



<?php
session_start();
$conn=new mysqli("localhost","root","","room");
if($conn->connect_error) die($conn->connect_error);
if($_SERVER['REQUEST_METHOD']=='POST')
{
	$r='abhi';
	$_POST['t']=$r;
	if(isset($_POST['submit']))
	{
		$room_name=$_POST['roomname'];
		$locality=$_POST['location'];
		$sub_district=$_POST['sub-district'];
		 $district=$_POST['district']; 
		$pincode=$_POST['pincode'];
		$no_of_beds=$_POST['noofbeds'];
		$rent=$_POST['rent'];
		$pic1= addslashes(file_get_contents($_FILES["roomimage1"]["tmp_name"]));
		$pic2=addslashes(file_get_contents($_FILES["roomimage2"]["tmp_name"]));
		$pic3=addslashes(file_get_contents($_FILES["roomimage3"]["tmp_name"]));
		$id=$_SESSION['oid'];
		
		$query="UPDATE room_details SET room_name='$room_name',locality='$locality',district='$district',sub_district='$sub_district',pincode='$pincode',no_of_beds='$no_of_beds',rent='$rent',pic1='$pic1',pic2='$pic2',pic3='$pic3',id='$id' where  ";
		$result=$conn->query($query);
		if(!$result)
		{
			echo "<script> alert('please try again later '); </script>";
			die("databse access failed:".$conn->error);
						

		}
		else
		{
			echo "<script> alert('Data Successfully uploaded '); </script>";
		}
	}
}
?>
</body>
</html>