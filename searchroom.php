<!DOCTYPE html>
<html lang="en">
<head>
<?php
session_start();
$conn=new mysqli("localhost","root","","room");
if($conn->connect_error) die($conn->connect_error);
if($_SERVER['REQUEST_METHOD']=='POST')
{
$loc=$_POST['location'];
$sub=$_POST['sub-district'];
$dis=$_POST['district'];
$query="select * from room_details where locality like '{$loc}%' and sub_district like '{$sub}%' and district like '{$dis}'";
		$result=$conn->query($query);
				$rows=$result->num_rows;
				
}
?>

<title>Room Rental Services</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="The Estate Teplate">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
<link rel="stylesheet" type="text/css" href="styles/hello.css">
</head>

<body>


	<!-- Header -->

	<header class="header trans_300">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="header_container d-flex flex-row align-items-center trans_300">

						<!-- Logo -->

						<div class="logo_container">
							<a href="#">
								<div class="logo">
									<img src="images/logo.png" alt="">
									<span>Room Rental Services</span>
								</div>
							</a>
						</div>
						
						<!-- Main Navigation -->

						<nav class="main_nav">
							<ul class="main_nav_list">
								<li class="main_nav_item"><a href="customerhome.html"> home</a></li>
								
								<li class="main_nav_item"><a href="index.html">Logout</a></li>

								
							</ul>
						</nav>
						
						
						
						<!-- Hamburger -->

						<div class="hamburger_container menu_mm">
							<div class="hamburger menu_mm">
								<i class="fas fa-bars trans_200 menu_mm"></i>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>

		<!-- Menu -->

		

	</header>
	
	

<div class="ab" style="background-image:url(images/testimonials_background.jpg)">
	<!-- Testimonials -->

	<div class="testimonials">
		<div class="testimonials_background_container prlx_parent">
			<div class="testimonials_background" style="background-image:url(images/testimonials_background.jpg)"></div>
		</div>

	
		<div class="row">
				<div class="col">'
					<form id="add" class="search-property" action="" method="post"  enctype="multipart/form-data">
					<div class="row">
	        			<div class="col-md align-items-end">
	        				<div class="form-group">
							<br><br><br><br>
	          				<div class="form-field">
	          					<div class="icon"><span class="icon-pencil"></span></div>
								<br><br><label for="">Locality</label>
			                <input type="text" id="location" name="location"  class="form-control "required="required"    placeholder="Locality name"><br>
							
			              </div>
		              </div>
	        			</div>
	        			<div class="col-md align-items-end">
	        				<div class="form-group">
							<br><br><br><br>
	          				<div class="form-field">
	          					<div class="icon"><span class="icon-pencil"></span></div>
								<br><br><label for="">Sub-district</label>
							<input type="text" id="sub-district"  name="sub-district" class="form-control"   required="required"   placeholder="Taluka"><br>
														
			              </div>
		              </div>
	        			</div>
	        			<div class="col-md align-items-end">
	        				<div class="form-group">
							<br><br><br><br>
	          				<div class="form-field">
	          					<div class="icon"><span class="icon-pencil"></span></div>
								<br><br><label for="">District</label>
			                <input type="text" id="district" name="district" class="form-control" required="required"   placeholder="District"><br>
														
			              </div>
		              </div>
	        			</div>
	        			<div class="col-md align-items-end">
	        				<div class="form-group">
							<br><br>	        					
	        					<div class="form-field">
	          					<div class="icon"><span class="icon-pencil"></span></div>
								<br><br><br><br>
								<br><input type="submit" name="search" value="Search" class="form-control btn btn-primary">
			              </div>
		              </div>
	        			
					</div>
</div>					
	        		<div class="row">	
	        		
	        		<?php
  if(isset($_POST['search']))
	 
	{	
if($rows==0)
{
	echo'<script> alert("NO ROOMS FOUND"); </script>';
}
	echo'<br><br><br>';
					
					echo'<div class="col-md align-items-end">';
	        				
								echo'<br><br>';
	        			echo'<div class="clearfix" style="background-image:url(images/testimonials_background.jpg)">';
							for($j=0;$j<$rows;++$j)
								{
									$result->data_seek($j);
									$row2=$result->fetch_array(MYSQLI_ASSOC);
									$locality=$row2['locality'];
									$sub_district=$row2['sub_district'];
									$district=$row2['district']; 
									$pincode=$row2['pincode'];
									$no_of_beds=$row2['no_of_beds'];
									$rent=$row2['rent'];
									$pic=$row2['pic1'];
									$pic2=$row2['pic2'];
									$pic3=$row2['pic3'];
									$id=$row2['id'];
									
									$query2="select * from owner_registration where id='$id'";
									$result2=$conn->query($query2);
									$ro=$result2->num_rows;
									

								for($i=0;$i<$ro;++$i)
								{
									$result2->data_seek($i);
									$res=$result2->fetch_array(MYSQLI_ASSOC);
								    $oname=$res['name'];
									$ono=$res['mobile'];
									$omail=$res['mail'];
								}
		
							echo' <div class="card" style="background-image:url(images/testimonials_background.jpg)">';

							 echo' <img src="data:image/jpeg2wbmp;base64,'.base64_encode( $pic ).' alt="Avatar" style="width:250px;height:250px">';
							  echo' <img src="data:image/jpeg2wbmp;base64,'.base64_encode( $pic2 ).' alt="Avatar" style="width:250px;height:250px">';
							  //echo' <img src="data:image/jpeg2wbmp;base64,'.base64_encode( $pic3).' alt="Avatar" style="width:250px;height:250px">';

							  echo'<div class="container10">';
							  echo'<p align="justify">';
							  
							    echo'<summary><h2><b>Address</b><h2></summary>';
								echo'<h4><b>Locality&nbsp:&nbsp'.$locality.'</b></h4>';
								echo'<h4><b>Taluka  &nbsp :&nbsp'.$sub_district.'</b></h4>';
								echo'<h4><b>District&nbsp :&nbsp'.$district.'</b></h4>';
								echo'<h4><b>Pincode  :&nbsp'.$pincode.'</b></h4>';
								echo'<h4><b>Rent &nbsp &nbsp     &nbsp          :&nbsp'.$rent.'</b></h4>';
								echo'<h4><b>Rooms   &nbsp :&nbsp'.$no_of_beds.'</b></h4>';
								echo'<details>';
								echo'<summary><h2><b>Owner Details</b><h2></summary>';
								echo'<h4><b>Name  &nbsp	 :&nbsp'.$oname.'</b></h4>';
								echo'<h4><b>Mobile&nbsp	 :&nbsp'.$ono.'</b></h4>';
								echo'<h4><b>Mail :<a href="mailto:'.$omail.'" >'.$omail.'</a></b></h4>';

								echo'</details>';
                                echo'</p>';

								
							 echo' </div>';
							echo'</div>';
					}
								
				$result->close();

							 
			echo'</div> </div>';
						
	        	
	}
			
?>

	
	</form>
	</div>					
	</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/scrollTo/jquery.scrollTo.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="js/custom.js"></script>






</body>

</html>