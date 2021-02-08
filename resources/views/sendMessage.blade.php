@extends('layouts.app')
<?php 
    // include('includes/server.php');

    // if(isset($_SESSION["Username"])){
    //     $username=$_SESSION["Username"];
    //     if ($_SESSION["Usertype"]==1) {
    //         $linkPro="artisanProfile.php";
    //         $linkEditPro="editartisan.php";
    //         $linkBtn="applyJob.php";
    //         $textBtn="Apply for this job";
    //     }
    //     else{
    //         $linkPro="clientProfile.php";
    //         $linkEditPro="editclient.php";
    //         $linkBtn="editJob.php";
    //         $textBtn="Edit the job offer";
    //     }
    // }
    // else{
	// 	header("location: loginReg.php");
	// }

    // if(isset($_SESSION["msgRcv"])){
    //     $msgRcv=$_SESSION["msgRcv"];
    // }

    // if(isset($_POST["send"])){
    //     $msgTo=$_POST["msgTo"];
    //     $msgBody=$_POST["msgBody"];
    //     $sql = "INSERT INTO message (sender, receiver, msg) VALUES ('$username', '$msgTo', '$msgBody')";
    //     $result = $conn->query($sql);
    //     if($result==true){
    //         header("location: message.php");
    //     }
    // }

    // include('includes/header.php');
    // if ($_SESSION["Usertype"]==1) {	
	// 	include('includes/artisan-navbar.php');
	// } 
	// if ($_SESSION["Usertype"]==2) {	
	// 	include('includes/client-navbar.php');
	// }
 ?>

    <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="page-header">
                        <h2>Write Message</h2>
                    </div>

                    <form id="registrationForm" method="post" class="form-horizontal">
                    <div class="form-group">
                        <label class="col-sm-4 control-label">To</label>
                        <div class="col-sm-8">
                            <!-- <input type="text" class="form-control" name="msgTo" value="<?php// echo $msgRcv; ?>" /> -->
                            <input type="text" class="form-control" name="msgTo" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-4 control-label">Message Body</label>
                        <div class="col-sm-8">
                            <textarea class="form-control" rows="12" name="msgBody"></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-9 col-sm-offset-3">
                            <button type="submit" name="send" class="btn btn-info btn-lg">Send Message</button>
                        </div>
                    </div>
                </form>
                </div>
            </div>
        </div>

<?php //include('includes/footer.php');?>