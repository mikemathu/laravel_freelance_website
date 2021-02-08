<?php 
    // include('includes/server.php');
    // include('includes/header.php');
    // include('includes/adminlogin-navabr.php');

 ?>

@extends('layouts.app')
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-1">
            <div class="page-header">
                <h2>ADMIN</h2>
            </div>
            <form id="loginForm" method="post" class="form-horizontal">
                <div style="color:red;">
                    <p><?php //echo $errorMsg; ?></p>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label">Username</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="username" />
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-4 control-label">Password</label>
                    <div class="col-sm-5">
                        <input type="password" class="form-control" name="password" />
                    </div>
                </div>

               

                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        <!-- Do NOT use name="submit" or id="submit" for the Submit button -->
                        <button type="submit" name="login" class="btn btn-info btn-lg">Login</button>
                    </div>
                </div>
            </form>
        </div>

        <?php //include('includes/footer.php'); ?>