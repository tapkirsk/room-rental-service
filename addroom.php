<!DOCTYPE html>
<html lang="en">
<head>
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
								<li class="main_nav_item"><a href="ownerhome.html"> home</a></li>
								
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
	
	


	<!-- Testimonials -->

	<div class="testimonials">
		<div class="testimonials_background_container prlx_parent">
			<div class="testimonials_background prlx" style="background-image:url(images/testimonials_background.jpg)"></div>
		</div>
		
		<div class="row">
				<div class="col">
					<form id="add" class="search-property" action="addroom.php" method="post"  enctype="multipart/form-data">
	        		<div class="row">
	        			<div class="col-md align-items-end">
	        				<div class="form-group">
							<br><br><br><br>
	        					<label for="">Room Name</label>
								 <input type="text" name="roomname" required="required" class="form-control" placeholder="Room name">
								<br>
	          				<div class="form-field">
	          					<div class="icon"><span class="icon-pencil"></span></div>
								<label for="">Location</label>
			                <input type="text" id="location" name="location" required="required" class="form-control" placeholder="Locality name"><br>
							<label for="">Sub-district</label>
							<input type="text" id="sub-district" required="required"  name="sub-district" class="form-control" placeholder="Taluka">
			              </div>
		              </div>
	        			</div>
	        			
	        			<div class="col-md align-items-end">
	        				<div class="form-group">
							<br><br><br><br><br><br><br><br>
	        					<label for="">District</label>
	        					<div class="form-field">
	          					<div class="icon"><span class="icon-pencil"></span></div>
			                <input type="text" id="district" name="district" class="form-control" required="required" placeholder="District"><br>
							<label for="">Pin Code</label>
							<input type="tel"  pattern="[0-9]{3}[0-9]{3}" maxlength="6" id="pincode" required="required" name="pincode" class="form-control" placeholder="Pincode">
			              </div>
		              </div>
	        			</div>
						
	        			<div class="row">
	        			<div class="col-md align-items-end">
	        				<div class="form-group">
							<br><br><br><br><br><br><br><br>
	        					<label for="">No Of Beds</label>
	        					<div class="form-field">
	          					<div class="select-wrap">
	                      <div class="icon"><span class="ion-ios-arrow-down"></span></div>
	                      <select  id="noofbeds" name="noofbeds" class="form-control">
	                      	<option value="1">1</option>
	                        <option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
							<option value="7">7</option>
							<option value="8">8</option>
							<option value="9">9</option>
							<option value="10">10</option>
	                        </select><br>
							<label for="#">Rent</label>
							<input type="number" id="rent" name="rent" class="form-control" placeholder="Rent">
	                    </div>
			              </div>
		              </div>
	        			</div>
	        			<div class="col-md align-items-end">
	        				<div class="form-group">
							<br><br><br><br><br><br><br><br>
	        					<label for="">Room Images</label>
	        					<div class="form-field">
	          					<div class="select-wrap">
								<div class="icon"><span class="ion-ios-arrow-down"></span></div>
	                      <input type="file" id="roomimage1" name="roomimage1" required="required" accept="images/*" class="form-control">
						  <br><br>
						  <input type="file" id="roomimage2" name="roomimage2" required="required" accept="images/*" class="form-control">
	                    </div>
						</div>
		              </div>
	        			</div>
	        			<div class="col-md align-self-end">
	        				<div class="form-group">
	        					<div class="form-field">
								<br><br><br><br><br><br>
								<input type="file" id="roomimage3" name="roomimage3" required="required" accept="images/*" class="form-control"><br><br>
			                <input type="submit" value="Add" name="submit" class="form-control btn btn-primary">
			              </div>
		              </div>
	        			</div>
	        		</div>
	        	</form>
				</div>
			</div>
			
			</div>			
			</div>

		</div>
	</div>

	<!-- Footer -->

	<footer class="footer">
		<div class="container">
			<div class="row">
				
				<!-- Footer About -->

				<div class="col-lg-3 footer_col">
					<div class="footer_col_title">
						<div class="logo_container">
							<a href="#">
								<div class="logo">
									<img src="images/logo.png" alt="">
									<span>Room Rental Services</span>
								</div>
							</a>
						</div>
					</div>
					<div class="footer_social"><br><br><br>
						<ul class="footer_social_list">
							<li class="footer_social_item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
							<li class="footer_social_item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
							<li class="footer_social_item"><a href="#"><i class="fab fa-twitter"></i></a></li>
							<li class="footer_social_item"><a href="#"><i class="fab fa-dribbble"></i></a></li>
							<li class="footer_social_item"><a href="#"><i class="fab fa-behance"></i></a></li>
						</ul>
					</div>
					<div class="footer_about">
						<p>Buying a property vs renting is a never-ending debate, but the outcome depends largely on your income and circumstances. If you’re looking to move house, and want to find a suitable rental property or shared accommodation, these Website can help you find the right fit..</p>
					</div>
				</div>
				<!-- Footer Useful Links -->

				<div class="col-lg-3 footer_col">
					<div class="footer_col_title">useful links</div>
					<ul class="footer_useful_links">
						<li class="useful_links_item"><a href="a.php">Listings</a></li>
						<li class="useful_links_item"><a href="#">Favorite Cities</a></li>
						<li class="useful_links_item"><a href="#">Clients Testimonials</a></li>
						<li class="useful_links_item"><a href="#">Featured Listings</a></li>
						<li class="useful_links_item"><a href="#">Properties on Offer</a></li>
						<li class="useful_links_item"><a href="#">Services</a></li>
						<li class="useful_links_item"><a href="#">News</a></li>
						<li class="useful_links_item"><a href="#">Our Agents</a></li>
					</ul>
				</div>
				
				<!-- Footer Contact Form -->
				<div class="col-lg-3 footer_col">
					<div class="footer_col_title">say hello</div>
					<div class="footer_contact_form_container">
						<form id="footer_contact_form" class="footer_contact_form" action="post">
							<input id="contact_form_name" class="input_field contact_form_name" type="text" placeholder="Name" required="required" data-error="Name is required.">
							<input id="contact_form_email" class="input_field contact_form_email" type="email" placeholder="E-mail" required="required" data-error="Valid email is required.">
							<textarea id="contact_form_message" class="text_field contact_form_message" name="message" placeholder="Message" required="required" data-error="Please, write us a message."></textarea>
							<button id="contact_send_btn" type="submit" class="contact_send_btn trans_200" value="Submit">send</button>
						</form>
					</div>
				</div>

				<!-- Footer Contact Info -->

				<div class="col-lg-3 footer_col">
					<div class="footer_col_title">contact info</div>
					<ul class="contact_info_list">
						<li class="contact_info_item d-flex flex-row">
							<div><div class="contact_info_icon"><img src="images/placeholder.svg" alt=""></div></div>
							<div class="contact_info_text">Shubham Tapkir </div>
						</li>
						<li class="contact_info_item d-flex flex-row">
							<div><div class="contact_info_icon"><img src="images/phone-call.svg" alt=""></div></div>
							<div class="contact_info_text">9075820673</div>
						</li>
						<li class="contact_info_item d-flex flex-row">
							<div><div class="contact_info_icon"><img src="images/message.svg" alt=""></div></div>
							<div class="contact_info_text"><a href="mailto:tapkirsk56@gmail.com?Subject=Hello" target="_top">tapkirsk56@gmail.com</a></div>
						</li>
						<li class="contact_info_item d-flex flex-row">
							<div><div class="contact_info_icon"><img src="images/planet-earth.svg" alt=""></div></div>
							<div class="contact_info_text"><a href="home.html">www.do not click.com</a></div>
						</li>
					</ul>
				</div>

			</div>
		</div>
	</footer>
	<div class="credits">
		<span>
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Designed By Mad Engineers | E-mail  <a href="mailto:tapkirsk56@gmail.com?Subject=Hello" target="_top">tapkirsk56@gmail.com</a>
</span>
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




<?php
session_start();
$conn=new mysqli("localhost","root","","room");
if($conn->connect_error) die($conn->connect_error);
if($_SERVER['REQUEST_METHOD']=='POST')
{
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
		
		$query="INSERT INTO room_details(room_name,locality,district,sub_district,pincode,no_of_beds,rent,pic1,pic2,pic3,id) VALUES('$room_name','$locality','$district','$sub_district','$pincode','$no_of_beds','$rent','$pic1','$pic2','$pic3','$id')";
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