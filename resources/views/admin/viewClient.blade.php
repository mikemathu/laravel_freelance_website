@extends('layouts.app')
<?php 
	// include('includes/server.php');

	// if(isset($_SESSION["Username"])){
	// 	$username=$_SESSION["Username"];
	// 	if ($_SESSION["Usertype"]==1) {
	// 		$linkPro="clientProfile.php";
	// 		$linkEditPro="editclient.php";
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
	// 	header("location: adminlogin.php");
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
    //         $photo=$row["photo"];
    //         $address=$row['address'];
	// 		}
	// } else {
	// 	echo "0 results";
	// }

    // include('includes/header.php');
    // include('includes/navbar.php');

 ?>
	<!--main body-->
	<div style="padding:1% 3% 1% 3%;">
		<div class="row">

            <div class="col-lg-12" style="padding:20px 20px 5px 20px;margin-top:20px">
                    <a href="admin/allArtisan" class="btn btn-primary">Back</a>               
            </div>

		<!--Column 1-->
		<div class="col-lg-3">

	<!--Main profile card-->
			<div class="card" style="padding:20px 20px 5px 20px;margin-top:20px">
				<img src="../<?php //echo (!empty($photo)) ? 'image/'.$photo : 'image/profile.jpg'; ?>" width="100%">
				<h2><?php //echo $name; ?></h2>
				<p><span class="glyphicon glyphicon-user"></span> <?php //echo $f_user; ?></p>

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
			  <div class="panel-body"><?php //echo $email; ?></div>
			</div>
			<div class="panel panel-success">
			  <div class="panel-heading">Mobile</div>
			  <div class="panel-body"><?php //echo $contactNo; ?></div>
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

	<!--Artisan Profile Details-->	
		<div class="card" style="padding:20px 20px 5px 20px;margin-top:20px">
			<div class="panel panel-primary">
			  <div class="panel-heading"><h3>Artisan Profile Details</h3></div>
			</div>
			<div class="panel panel-primary">
			  <div class="panel-heading">Professional Title</div>
			  <div class="panel-body"><h4><?php //echo $name; ?></h4></div>
			</div>
			<div class="panel panel-primary">
			  <div class="panel-heading">Profile Summery</div>
			  <div class="panel-body"><h4><?php //echo $email; ?></h4></div>
			</div>
			<div class="panel panel-primary">
			  <div class="panel-heading">Experience</div>
			  <div class="panel-body"><h4><?php //echo $contactNo; ?></h4></div>
			</div>
			
		</div>
	<!--End Artisan Profile Details-->
	</div>
	<!--End Column 2-->
	</div>
</div>
<!--End main body-->

<?php //include('includes/footer.php');?>