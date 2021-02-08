@extends('layouts.app')

@section('content')
    	<!--Header-->
	<div class="row header1">
		<div class="col-lg-4">
			<div class="jumbotron">
				<div class="container text-center">
					<h1>Kilifi Artisan Marketplace</h1>
					<p>Remember, time is money. Use it properly. Do not waste your time thinking when others are getting things done here.</p>
					<!-- <a href="loginReg.php" class="btn btn-warning btn-lg">It's Free!! Join Now!!!</a> -->
                    <a href="/loginReg" class="btn btn-warning btn-lg">It's Free!! Join Now!!!</a>
					<p></p>
					<div class="btn-group">
						<a href="#how" type="button" class="btn btn-info">How it works</a>
						<a href="#faq" type="button" class="btn btn-default">FAQ</a>
						<a href="#category" type="button" class="btn btn-info">Catagories</a>
					</div>
				</div>
			</div>	
		</div>
	<!--End Header-->

    <!--slider-->
	<div class="col-lg-8">
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
		  <!-- Indicators -->
		  <ol class="carousel-indicators">
		    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		    <li data-target="#myCarousel" data-slide-to="1"></li>
		    <li data-target="#myCarousel" data-slide-to="2"></li>
		  </ol>

		  <!-- Wrapper for slides -->
		  <div class="carousel-inner" role="listbox">
		    <div class="item active">
		      <!-- <img src="image/computer.jpg" alt="Chania"> -->
			  <img style="width:100%" src="/storage/cover_images/">
		      <div class="carousel-caption">
		        <h3>Work</h3>
		        <p>Work hard to be successful.</p>
		      </div>
		    </div>

		    <div class="item">
		      <img src="image/mug.jpg" alt="Chania">
		      <div class="carousel-caption">
		        <h3>Time</h3>
		        <p>Do not waste your time.</p>
		      </div>
		    </div>

		    <div class="item">
		      <img src="image/coat.jpg" alt="Flower">
		      <div class="carousel-caption">
		        <h3>Believe</h3>
		        <p>Always believe in yourself.</p>
		      </div>
		    </div>
		  </div>

		  <!-- Left and right controls -->
		  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
		    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
		    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		  </a>
		</div>
	</div>
</div>
<!--End slider-->
<!--End Header and slider-->

<!--Individual register tip-->
<div style="background:#cce5ff">
	<div class="container text-center" style="padding:5%;">
		<div class="row">
			<div class="col-lg-6 card" style="padding:40px 80px 40px 80px;">
				<h1>Need works done?</h1>
				<p>It's easy. Simply post a job you need completed and receive competitive bids from Artisans within minutes. Whatever your needs, there will be a Artisan to get it done: from web design, mobile app development, virtual assistants, product manufacturing, and graphic design (and a whole lot more). It is the simplest and safest way to get work done online.</p>
				<p></p>
				<a href="loginReg.php" class="btn btn-success btn-lg">Get Started</a>
			</div>
			<div class="col-lg-6" style="padding:40px 80px 40px 80px;margin-top:15px;box-shadow: 4px 4px 2px 5px rgba(0, 0, 0, 0.2), 0 6px 0px 0 rgba(0, 0, 0, 0.19);background:#fff">
				<h1>Looking for work?</h1>
				<p>If you are an expert in any kind of computer related or online work, then do not hesitate to join our platform. It is easy to use and payment is secured. It is a great platform to those people who are skillful. So do not miss the chance to explore the job posts and make some money.</p>
				<p></p>
				<a href="loginReg.php" class="btn btn-primary btn-lg">Get Started</a>
			</div>
		</div>
	</div>
	</div>
	<!--End Individual register tip-->


	<!--Popular Categories-->
	<div class="container text-center" style="padding:4%;" id="category">
		<h1 class="card header2" style="background:#007BFF">Popular Categories</h1>
		<div class="row">
			<div class="col-lg-4">
				<div class="card" style="padding:20px 40px 20px 40px;margin:20px;">
					<a href="loginReg.php"><span class="glyphicon glyphicon-credit-card"></span>
					<h3>Web Developer</h3>
					<p>Please login and browse our web developers</p></a>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="card" style="padding:20px 40px 20px 40px;margin:20px;">
					<a href="loginReg.php"><span class="glyphicon glyphicon-phone"></span>
					<h3>Mobile Developer</h3>
					<p>Please login and Browse our Mobile Developer</p></a>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="card" style="padding:20px 40px 20px 40px;margin:20px;">
					<a href="loginReg.php"><span class="glyphicon glyphicon-picture"></span>
					<h3>Graphics Designer</h3>
					<p>Please login and browse our Graphics Designer</p></a>
				</div>
			</div>
		</div>
			<div class="row">
			<div class="col-lg-4">
				<div class="card" style="padding:20px 40px 20px 40px;margin:20px;">
					<a href="loginReg.php"><span class="glyphicon glyphicon-pencil"></span>
					<h3>Creative writer</h3>
					<p>Please login and browse our Creative writer</p></a>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="card" style="padding:20px 40px 20px 40px;margin:20px;">
					<a href="loginReg.php"><span class="glyphicon glyphicon-signal"></span>
					<h3>Marketing Expert</h3>
					<p>Please login and browse our Marketing Expert</p></a>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="card" style="padding:20px 40px 20px 40px;margin:20px;">
					<a href="loginReg.php"><span class="glyphicon glyphicon-headphones"></span>
					<h3>Virtual Assistant</h3>
					<p>Please login and browse our web Virtual Assistant</p></a>
				</div>
			</div>
		</div>
	</div>
	<!--End Popular Categories-->

	<!--How it works-->
	<div style="background:#cce5ff">
	<div class="container text-center" style="padding:4%;" id="how">
		<h1 class="card header2" style="background:#007BFF">How it works</h1>
		<div class="row card" style="padding:30px 60px 30px 60px;margin:30px;">
			<div class="col-lg-6">
				<h3>Post Projects For Free</h3>
				<p>It's always free to post your project. You’ll automatically begin to receive bids from our Artisans. Also, you can browse through the talent available on our site, and contact them by the contact information.</p>
			</div>
			<div class="col-lg-6">
				<img src="image/img01.jpg">
			</div>
		</div>
		<div class="row card" style="padding:30px 60px 30px 60px;margin:30px;">
			<div class="col-lg-6">
				<h3>Feel Free To Talk</h3>
				<p>It is easier to talk with the Artisans here. So before you hire any Artisan feel free to talk with them. Tell them what you need and get the project done in the shortest possible time.</p>
			</div>
			<div class="col-lg-6">
				<img src="image/img03.jpg">
			</div>
		</div>
		<div class="row card" style="padding:30px 60px 30px 60px;margin:30px;">
			<div class="col-lg-6">
				<h3>Build An client Profile</h3>
				<p>If you have a lot of works to be done or run a small business that needs some Artisans in a daily basis, this is the perfect place for you. Build your client profile today and start hiring.</p>
			</div>
			<div class="col-lg-6">
				<img src="image/img04.jpg">
			</div>
		</div>
	</div>
	</div>
	<!--End How it works-->


	<!--FAQ-->
	<div class="container text-center" style="padding:4%;" id="faq">
	<h1 class="card header2" style="background:#007BFF">FAQ</h1>
	<div class="btn-group-vertical">
	<button type="button" class="btn btn-default btn-lg" data-toggle="collapse" data-target="#demo" style="width:1062px"><h3>What is Kilifi Artisan Marketplace?</h3></button>
	<div id="demo" class="collapse">
		<div class="card" style="padding:20px 40px 20px 40px;">
			<h4>Kilifi Artisan marketplace is an online outsourcing platform that puts clients and businesses in contact with a global network of Artisans. Any member can post a project, whether a short- or long-term job, and choose from skilled Artisans who offer bid proposals with rate for completing the work. It's a mutually beneficial arrangement. <br>clients can have their pick of thousands of Artisans who have the exact skills needed to get the job done, without undertaking the expense and commitment of hiring full-time employees in person. <br>Artisan can tap into a readily available source of constant part-time and full-time work opportunities from clients who are specifically seeking them out.</h4>
		</div>
	</div>
	<button type="button" class="btn btn-default btn-lg" data-toggle="collapse" data-target="#demo1" style="width:1062px"><h3>I am an client, how will this site work for me?</h3></button>
	<div id="demo1" class="collapse">
		<div class="card" style="padding:20px 40px 20px 40px;">
			<h4>You can gain a competitive advantage over your competition by tapping into a skilled global workforce on demand. <br>If you are a small business and can't afford to hire a full-time staff, don't fret! The power of this platform is available for small to medium businesses! Whether it's a website that needs building, business cards or stationery that needs designing, a product that needs to be designed or manufactured, or research that needs to be done, this is the place for you! <br>Thousands of skilled workers are ready to start working right now! All you need to do is post a project!</h4>
		</div>
	</div>
	<button type="button" class="btn btn-default btn-lg" data-toggle="collapse" data-target="#demo2" style="width:1062px"><h3>I am an Artisan, how will this site work for me?</h3></button>
	<div id="demo2" class="collapse">
		<div class="card" style="padding:20px 40px 20px 40px;">
			<h4>With your account, you can work at home and tap into a global network of businesses and projects across a huge range of industries - the ultimate opportunity in job flexibility! <br>Work on what you want, when you want and where you want to! The lifestyle of a artisan is taking off. By working as a Artisan online, you can greatly increase your client base and job throughput. <br>To start, all you need to do is sign up and start bidding. It's FREE!</h4>
		</div>
	</div>
	<button type="button" class="btn btn-default btn-lg" data-toggle="collapse" data-target="#demo3" style="width:1062px"><h3>Do I have to pay to register?</h3></button>
	<div id="demo3" class="collapse">
		<div class="card" style="padding:20px 40px 20px 40px;">
			<h4>No. Freelance marketplace is absolutely free to register and explore the posted job offers, Artisans and clients.</h4>
		</div>
	</div>
	</div>
	</div>
	<!--End FAQ-->
	
	<?php  //include('includes/footer.php');?>

@endsection
