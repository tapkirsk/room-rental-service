<?php 
		$conn=new mysqli("localhost","root","","room");
if($conn->connect_error) die($conn->connect_error);
		$droom="asd";
		$query2="select * from room_details where room_name='$droom'";
		$result2=$conn->query($query2);
		if(!$result2) die($conn->error);
		$rows=$result2->num_rows;
		for($j=0;$j<$rows;++$j)
		{
			$result2->data_seek($j);
			$row2=$result2->fetch_array(MYSQLI_ASSOC);
			$room_name=$row2['room_name'];
		$locality=$row2['locality'];
		$sub_district=$row2['sub_district'];
		 $district=$row2['district']; 
		$pincode=$row2['pincode'];
		$no_of_beds=$row2['no_of_beds'];
		$rent=$row2['rent'];
		}
		echo $locality;
		$result2->close();
		
		
		//$pic1= addslashes(file_get_contents($_FILES["roomimage1"]["tmp_name"]));
		//$pic2=addslashes(file_get_contents($_FILES["roomimage2"]["tmp_name"]));
		//$pic3=addslashes(file_get_contents($_FILES["roomimage3"]["tmp_name"]));
		//$id=$_SESSION['oid'];
		
		
	

?>