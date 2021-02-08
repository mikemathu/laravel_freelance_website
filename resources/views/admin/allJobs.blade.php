@extends('layouts.app')
<?php 
	// include('includes/server.php');
	
	// if(isset($_SESSION["Username"])){
	// 	$username=$_SESSION["Username"];
	// 	if ($_SESSION["Usertype"]==1) {
	// 		$linkPro="artisanProfile.php";
	// 		$linkEditPro="editArtisan.php";
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

	// if(isset($_POST["jid"])){
	// 	$_SESSION["job_id"]=$_POST["jid"];
	// 	header("location: jobDetails.php");
	// }

	// $sql = "SELECT * FROM job_offer WHERE valid=1 ORDER BY timestamp DESC";
	// $result = $conn->query($sql);

	// if(isset($_POST["s_title"])){
	// 	$t=$_POST["s_title"];
	// 	$sql = "SELECT * FROM job_offer WHERE title='$t' and valid=1";
	// 	$result = $conn->query($sql);
	// }

	// if(isset($_POST["s_client"])){
	// 	$t=$_POST["s_client"];
	// 	$sql = "SELECT * FROM job_offer WHERE e_username='$t' and valid=1";
	// 	$result = $conn->query($sql);
	// }

	// if(isset($_POST["s_id"])){
	// 	$t=$_POST["s_id"];
	// 	$sql = "SELECT * FROM job_offer WHERE job_id='$t' and valid=1";
	// 	$result = $conn->query($sql);
	// }

	// if(isset($_POST["recentJob"])){
	// 	$sql = "SELECT * FROM job_offer WHERE valid=1 ORDER BY timestamp DESC";
	// 	$result = $conn->query($sql);
	// }

	// if(isset($_POST["oldJob"])){
	// 	$sql = "SELECT * FROM job_offer WHERE valid=1";
	// 	$result = $conn->query($sql);
	// }

    // include('includes/header.php');
    // include('includes/navbar.php');

	// $userName =  $_SESSION['Username'];
 ?>
	<!--main body-->
	<div style="padding:1% 3% 1% 3%;">
	<div class="row">

	<!--Column 1-->
		<div class="col-lg-9">

		<!--artisan Profile Details-->	
		<div class="card" style="padding:20px 20px 5px 20px;margin-top:20px">
			<div class="panel panel-success">
			  <div class="panel-heading"><h3>All Job Offers</h3></div>
			  <div class="panel-body"><h4>
                  <table style="width:100%">
                      <tr>
                          <td style="font-weight:bold; padding-bottom:10px;">Job Id</td>
                          <td style="font-weight:bold; padding-bottom:10px;">Title</td>
                          <td style="font-weight:bold; padding-bottom:10px;">Budget</td>
                          <td style="font-weight:bold; padding-bottom:10px;">Client Name</td>
                          <td style="font-weight:bold; padding-bottom:10px;">Posted on</td>
                      </tr>
                      <?php 
                    //   if ($result->num_rows > 0) {
                    //         // output data of each row
                    //         while($row = $result->fetch_assoc()) {
                    //             $job_id=$row["job_id"];
                    //             $title=$row["title"];
                    //             $budget=$row["budget"];
                    //             $e_username=$row["e_username"];
					// 			$timestamp=$row["timestamp"];

                    //             echo "
                    //             <form action='allJob.php' method='post'>
                    //             <input type='hidden' name='jid' value='".$job_id."'>
                    //                 <tr>
                    //                 <td>".$job_id."</td>
                    //                 <td><input type='submit' class='btn btn-link btn-lg' value='".$title."'></td>
                    //                 <td>".$budget."</td>
                    //                 <td>".$e_username."</td>
					// 				<td>".$timestamp."</td>
									
					// 				<td>
					// 					<script>
					// 						function goDoSomething(d){
					// 							var ids=d.getAttribute('data-id');
					// 							document.cookie = 'ids='+ids;
					// 						}										
					// 					</script>
					// 					<form method='POST' action=>
					// 						<button class='btn btn-danger btn-sm deleteJobOffer btn-flat' data-id='".$row['job_id']."' onclick='goDoSomething(this);' data-toggle='modal' '><i class='fa fa-trash'></i> Delete</button>  
					// 					</form>
					// 				</td>
                    //                 </tr>
                    //             </form>
                    //             ";
                    //             }
                    //     } else {
                    //         echo "<tr></tr><tr><td></td><td>Nothing to show</td></tr>";
                    //     }
                       ?>
                     </table>
              </h4></div>
			</div>
			<p></p>
		</div>
	<!--End artisan Profile Details-->

	</div>
	<!--End Column 1-->

	<!--Column 2-->
	<div class="col-lg-3">

	<!--Main profile card-->
		<div class="card" style="padding:20px 20px 5px 20px;margin-top:20px">
			<p></p>
			<form action="allJob.php" method="post">
				<div class="form-group">
				  <input type="text" class="form-control" name="s_title">
				  <center><button type="submit" class="btn btn-info">Search by Job Title</button></center>
				</div>
	        </form>
	        <form action="allJob.php" method="post">
				<div class="form-group">
				  <input type="text" class="form-control" name="s_client">
				  <center><button type="submit" class="btn btn-info">Search by client</button></center>
				</div>
	        </form>

	        <form action="allJob.php" method="post">
				<div class="form-group">
				  <input type="text" class="form-control" name="s_id">
				  <center><button type="submit" class="btn btn-info">Search by Job ID</button></center>
				</div>
	        </form>

	        <form action="allJob.php" method="post">
				<div class="form-group">
				  <center><button type="submit" name="recentJob" class="btn btn-warning">See all recent posted jobs first</button></center>
				</div>
	        </form>

	        <form action="allJob.php" method="post">
				<div class="form-group">
				  <center><button type="submit" name="oldJob" class="btn btn-warning">See all older posted jobs first</button></center>
				</div>
	        </form>

	        <p></p>
	    </div>
	<!--End Main profile card-->

	</div>
	<!--End Column 2-->

</div>
</div>
<!--End main body-->

<?php //include('includes/footer.php');?>

<?php //include('includes/delete-modal.php'); ?>

<script>
     $(document).on('click', '.deleteJobOffer', function(e){
    e.preventDefault();
    $('#deleteJobOffer').modal('show');
    var id = $(this).data('id');
    getRow(id);
  });
</script>