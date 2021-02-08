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
	// 	header("location: adminlogin.php");
	// }

	// if(isset($_SESSION["job_id"])){
	// 	$job_id=$_SESSION["job_id"];
	// }
	// else{
	// 	$job_id="";
	// }

	// if(isset($_POST["f_user"])){
	// 	$_SESSION["f_user"]=$_POST["f_user"];
	// 	header("location: viewartisan.php");
	// }

	// if(isset($_POST["c_letter"])){
	// 	$_SESSION["c_letter"]=$_POST["c_letter"];
	// 	header("location: coverLetter.php");
	// }

	// if(isset($_POST["f_hire"])){
	// 	$f_hire=$_POST["f_hire"];
	// 	$f_price=$_POST["f_price"];

	// 	$sql = "INSERT INTO selected (f_username, job_id, e_username, price, valid) VALUES ('$f_hire', '$job_id', '$username','$f_price',1)";    
	// 	$result = $conn->query($sql);

	// 	if($result==true){
	// 		$sql = "DELETE FROM apply WHERE job_id='$job_id'";
	// 		$result = $conn->query($sql);
	// 		if($result==true){
	// 			$sql = "UPDATE job_offer SET valid=0 WHERE job_id='$job_id'";
	// 			$result = $conn->query($sql);
	// 			if($result==true){
	// 				header("location: jobDetails.php");
	// 			}
	// 		}
	// 	}
	// }

	// if(isset($_POST["f_done"])){
	// 	$f_done=$_POST["f_done"];
	// 	$sql = "UPDATE selected SET valid=0 WHERE job_id='$job_id'";
	// 	$result = $conn->query($sql);
	// 	if($result==true){
	// 		header("location: jobDetails.php");
	// 	}
	// }

	// $sql = "SELECT * FROM job_offer WHERE job_id='$job_id'";
	// $result = $conn->query($sql);
	// if ($result->num_rows > 0) {
	// 	// output data of each row
	// 	while($row = $result->fetch_assoc()) {
	// 		$e_username=$row["e_username"];
	// 		$title=$row["title"];
	// 		$description=$row["description"];
	// 		$budget=$row["budget"];
	// 		$location=$row["location"];
	// 		$timestamp=$row["timestamp"];
    //         $jv=$row["valid"];
    //         $postedOn=$row['timestamp'];
	// 		}
	// }

	// $_SESSION["msgRcv"]=$e_username;
	
    // include('includes/header.php');
    // include('includes/navbar.php');
 ?>
	<!--main body-->
	<div style="padding:1% 3% 1% 3%;">
	<div class="row">

    <div class="col-lg-12" style="padding:20px 20px 5px 20px;margin-top:20px">
                    <a href="admin/allJob" class="btn btn-primary">Back</a>               
            </div>

	<!--Column 1-->
	<div class="col-lg-7">

	<!--artisan Profile Details-->	
		<div class="card" style="padding:20px 20px 5px 20px;margin-top:20px">
			<div class="panel panel-success">
			  <div class="panel-heading"><h3>Job Offer Details</h3></div>
			</div>
			<div class="panel panel-success">
			  <div class="panel-heading">Job Title</div>
			  <div class="panel-body"><h4><?php //echo $title; ?></h4></div>
			</div>
			<div class="panel panel-success">
			  <div class="panel-heading">Job Description</div>
			  <div class="panel-body"><h4><?php //echo $description; ?></h4></div>
			</div>
			<div class="panel panel-success">
			  <div class="panel-heading">Budget</div>
			  <div class="panel-body"><h4><?php //echo $budget; ?></h4></div>
			</div>
			<div class="panel panel-success">
			  <div class="panel-heading">Location</div>
			  <div class="panel-body"><h4><?php //echo $location; ?></h4></div>
			</div>
			<div class="panel panel-success">
			  <div class="panel-heading">Posted On</div>
			  <div class="panel-body"><h4><?php  //echo $postedOn; ?></h4></div>
			</div>		
		</div>
	

</div>
<!--End Column 1-->

<?php 
	// $sql = "SELECT * FROM client WHERE username='$e_username'";
	// $result = $conn->query($sql);
	// if ($result->num_rows > 0) {
	// 	// output data of each row
	// 	while($row = $result->fetch_assoc()) {
	// 		$email=$row["email"];
	// 		$contact_no=$row["contact_no"];
	// 		$address=$row["address"];
	// 		$photo=$row["photo"];
	// 		}
	// }
?>

	<!--Column 2-->
	<div class="col-lg-3">

	<!--Main profile card-->
		<div class="card" style="padding:20px 20px 5px 20px;margin-top:20px">
			<img src="../<?php //echo (!empty($photo)) ? 'image/'.$photo : 'image/profile.jpg'; ?>" width="100%">
			<h2><?php //echo $e_Name; ?></h2>
			<p><span class="glyphicon glyphicon-user"></span> <?php //echo $e_username; ?></p>
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
			  <div class="panel-body"><?php //echo $contact_no; ?></div>
			</div>
			<div class="panel panel-success">
			  <div class="panel-heading">Address</div>
			  <div class="panel-body"><?php //echo $address; ?></div>
			</div>
		</div>
	<!--End Contact Information-->
	
	</div>
	<!--End Column 2-->

<!--Column 3-->
	</div>
</div>
<!--End main body-->

<?php
	//include('includes/footer.php');
?>