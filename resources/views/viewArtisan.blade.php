@extends('layouts.app')
<?php 
	// include('includes/server.php');

	// if(isset($_SESSION["Username"])){
	// 	$username=$_SESSION["Username"];
	// 	if ($_SESSION["Usertype"]==1) {
	// 		$linkPro="artisanProfile.php";
	// 		$linkEditPro="editartisan.php";
	// 		$linkBtn="applyJob.php";
	// 		$textBtn="Apply for this job";
	// 	}
	// 	else{
	// 		$linkPro="clientProfile.php";
	// 		$linkEditPro="editclient.php";
	// 		$linkBtn="editJob.php";
	// 		$textBtn="Edit the job offer";
	// 	}
	// }
	// else{
	// 	header("location: loginReg.php");
	// }

	// if(isset($_SESSION["f_user"])){
	// 	$f_user=$_SESSION["f_user"];
	// 	$_SESSION["msgRcv"]=$f_user;
	// }

	// $sql = "SELECT * FROM artisan WHERE username='$f_user'";
	// $result = $conn->query($sql);

	// if ($result->num_rows > 0) {
	// 	// output data of each row
	// 	while($row = $result->fetch_assoc()) {
	// 		$name=$row["Name"];
	// 		$email=$row["email"];
	// 		$contactNo=$row["contact_no"];
	// 		$gender=$row["gender"];
	// 		$birthdate=$row["birthdate"];
	// 		$address=$row["address"];
	// 		$prof_title=$row["prof_title"];
	// 		$profile_sum=$row["profile_sum"];
	// 		$experience=$row["experience"];
	// 		$photo=$row["photo"];
	// 		}
	// } 

	// include('includes/header.php');
	
	// if ($_SESSION["Usertype"]==1) {	
	// 	include('includes/artisan-navbar.php');
	// } 
	// if ($_SESSION["Usertype"]==2) {	
	// 	include('includes/client-navbar.php');
	// }
 ?>
	<!--main body-->
	<div style="padding:1% 3% 1% 3%;">
		<div class="row">

		<!--Column 1-->
		<div class="col-lg-3">

	<!--Main profile card-->
			<div class="card" style="padding:20px 20px 5px 20px;margin-top:20px">
				<p></p>
				<!-- <img src="image/img04.jpg"> -->
				<img src="<?php //echo (!empty($photo)) ? 'image/'.$photo : 'image/profile.jpg'; ?>" width="100%">
				<h2><?php //echo $name; ?></h2>
				<p><span class="glyphicon glyphicon-user"></span> <?php// echo $f_user; ?></p>

				<?php

					// if ($_SESSION["Usertype"]==2) {
					// 	echo '
					// 	<center><a href="sendMessage.php" class="btn btn-info"><span class="glyphicon glyphicon-envelope"></span>  Send Message</a></center> ';
					// }
				?>     
	        
	    </div>
		<!--End Main profile card-->

		<!--Contact Information-->
		<div class="card" style="padding:20px 20px 5px 20px;margin-top:20px">
			<div class="panel panel-success">
			  <div class="panel-heading"><h4>Contact Information</h4></div>
			</div>
			<div class="panel panel-success">
			  <div class="panel-heading">Email</div>
			  <div class="panel-body"><?php// echo $email; ?></div>
			</div>
			<div class="panel panel-success">
			  <div class="panel-heading">Mobile</div>
			  <div class="panel-body"><?php// echo $contactNo; ?></div>
			</div>
			<div class="panel panel-success">
			  <div class="panel-heading">Address</div>
			  <div class="panel-body"><?php //echo $address; ?></div>
			</div>
		</div>
		<!--End Contact Information-->
	</div>
	<!--End Column 1-->

	<!--Column 2-->
	<div class="col-lg-7">

	<!--artisan Profile Details-->	
		<div class="card" style="padding:20px 20px 5px 20px;margin-top:20px">
			<div class="panel panel-primary">
			  <div class="panel-heading"><h3>artisan Profile Details</h3></div>
			</div>
			<div class="panel panel-primary">
			  <div class="panel-heading">Professional Title</div>
			  <div class="panel-body"><h4><?php //echo $prof_title; ?></h4></div>
			</div>
			<div class="panel panel-primary">
			  <div class="panel-heading">Profile Summery</div>
			  <div class="panel-body"><h4><?php //echo $profile_sum; ?></h4></div>
			</div>
			<div class="panel panel-primary">
			  <div class="panel-heading">Experience</div>
			  <div class="panel-body"><h4><?php //echo $experience; ?></h4></div>
			</div>
			
		</div>
	<!--End artisan Profile Details-->
	</div>
	<!--End Column 2-->
	</div>
</div>
<!--End main body-->

<?php //include('includes/footer.php');?>