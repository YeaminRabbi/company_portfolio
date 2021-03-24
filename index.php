<?php require 'backend_code.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
<!--
New Event
http://www.templatemo.com/tm-486-new-event
-->
<title>Rabbi Template</title>


<!--Fabicon Image-->
<link rel="shortcut icon"  href="img/fabicon_logo/f-black.png">

<meta name="description" content="">
<meta name="author" content="">
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/owl.theme.css">
<link rel="stylesheet" href="css/owl.carousel.css">

<!-- Main css -->
<link rel="stylesheet" href="css/style.css">

<!-- Google Font -->
<link href='https://fonts.googleapis.com/css?family=Poppins:400,500,600' rel='stylesheet' type='text/css'>

</head>
<body data-spy="scroll" data-offset="50" data-target=".navbar-collapse">

<!-- =========================
     PRE LOADER       
============================== -->
<div class="preloader">

	<div class="sk-rotating-plane"></div>

</div>


<!-- =========================
     NAVIGATION LINKS     
============================== -->
<div class="navbar navbar-fixed-top custom-navbar" role="navigation">
	<div class="container">

		<!-- navbar header -->
		<div class="navbar-header">
			<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="icon icon-bar"></span>
				<span class="icon icon-bar"></span>
				<span class="icon icon-bar"></span>
			</button>

			<?php
				if($header_section['text_logo_status']==1){
			?>
			<a href="index.php" class="navbar-brand"><?= $header_section['text_logo'] ?></a>
			<?php
				}

				elseif ($header_section['image_logo_status']==1) {
			?>
			<img src="<?= $header_section['image_logo'] ?>" style="max-height: 200px;max-width: 200px;">
			<?php
				}
			?>
			
		</div>

		<div class="collapse navbar-collapse">

			<ul class="nav navbar-nav navbar-right">
				<li><a href="#intro" class="smoothScroll">HOME</a></li>
				<li><a href="#overview" class="smoothScroll">About us</a></li>
				<li><a href="#detail" class="smoothScroll">Detail</a></li>
				<li><a href="#video" class="smoothScroll">Our View</a></li>
				<li><a href="#our_team" class="smoothScroll">Our Team</a></li>
				<li><a href="#speakers" class="smoothScroll">Deyons</a></li>
				<li><a href="#faq" class="smoothScroll">Our Service</a></li>
				<li><a href="#contact" class="smoothScroll">Contact</a></li>
			</ul>

		</div>

	</div>
</div>


<!-- =========================
    INTRO SECTION   
============================== -->
<section id="intro" class="parallax-section" style="background: url('img/intro-bg.jpg') 50% 0 repeat-y fixed;">
	<div class="container">
		<div class="row">

			<div class="col-md-12 col-sm-12">
				<h1 class="wow fadeInUp" data-wow-delay="1.6s"><?= $banner_section['title'] ?></h1>
				<h3 class="wow bounceIn" data-wow-delay="0.9s"><?= $banner_section['sub_title'] ?></h3>
				
				<a href="#overview" class="btn btn-lg btn-danger smoothScroll wow fadeInUp hidden-xs" data-wow-delay="2.3s">LEARN MORE</a>
			</div>
		</div>
	</div>
</section>


<!-- =========================
    OVERVIEW SECTION   
============================== -->
<section id="overview" class="parallax-section">
	<div class="container">
		<div class="row">

			<div class="wow fadeInUp col-md-6 col-sm-6" data-wow-delay="0.6s">
				<h2>ABOUT US</h2>
				<div><?= $aboutus_section['description'] ?></div>
			</div>
					
			<div class="wow fadeInUp col-md-6 col-sm-6" data-wow-delay="0.9s">
				<img src="<?= $aboutus_section['image'] ?>" class="img-responsive" alt="Overview">
			</div>

		</div>
	</div>
</section>


<!-- =========================
    DETAIL SECTION   
============================== -->
<section id="detail" class="parallax-section">
	<div class="container">
		<div class="row">

			<div class="wow fadeInLeft col-md-4 col-sm-4" data-wow-delay="0.3s">
				<i class="fa fa-user" aria-hidden="true"></i>
				<h3><?= $details_section['employee'] ?> Employees</h3>
				<p><?= $details_section['employee_details'] ?></p>
			</div>

			<div class="wow fadeInUp col-md-4 col-sm-4" data-wow-delay="0.6s">
				<i class="fa fa-clock-o"></i>
				<h3><?= $details_section['projects'] ?> Projects</h3>
				<p><?= $details_section['projects_details'] ?></p>
			</div>

			<div class="wow fadeInRight col-md-4 col-sm-4" data-wow-delay="0.3s">
				<i class="fa fa-group"></i>
				<h3><?= $details_section['partners']  ?> Partners </h3>
				<p><?= $details_section['partners_details'] ?></p>
			</div>

		</div>
	</div>
</section>


<!-- =========================
   OUR VIEW SECTION   
============================== -->
<section id="video" class="parallax-section">
	<div class="container" style="padding-top: 100px;padding-bottom: 90px;">
		<div class="row wow fadeInUp" data-wow-delay="0.6s">
	
			<ul class="nav nav-tabs" style="font-size: 22px;">
			  <li class="nav-item">
			    <a class="nav-link active" data-toggle="tab" href="#home">Our Vision</a>
			  </li>
			  <li class="nav-item">
			    <a class="nav-link" data-toggle="tab" href="#menu1">Our Mission</a>
			  </li>
			  <li class="nav-item">
			    <a class="nav-link" data-toggle="tab" href="#menu2">Our Concepts</a>
			  </li>
			</ul>

			
			<div class="tab-content" style="font-size: 18px;">
			  
			  <div class="tab-pane container active" id="home"><?= $our_view_section['our_vision'] ?></div>
			  
			  <div class="tab-pane container fade" id="menu1"><?= $our_view_section['our_mission'] ?></div>
			  
			  <div class="tab-pane container fade" id="menu2"><?= $our_view_section['our_concept'] ?></div>

			</div>



		</div>
	</div>
</section>


<!-- =========================
    Our Team SECTION   
============================== -->
<section id="our_team" style="padding-top: 100px; padding-bottom: 80px;">
	<div class="container">
		<div class="text-center">
			<h2>Our Team</h2>
			<p>Full potential team.</p>
		</div>
		
		
		<div class="d-flex justify-content-around text-center">
		
		<?php
			foreach ($team_section as $key => $data) {
		?>

		<div class="wow fadeInUp" style="display: inline-block;margin-top: 20px;padding-right: 50px;padding-left: 50px;" data-wow-delay="0.9s">
			<img src="<?= $data['image'] ?>" style="max-width: 300px;" alt="team">
			<h4><?= $data['name'] ?></h4>
			<h6><?= $data['title'] ?></h6>
		</div>

		<?php
			}
		?>
			

		</div>

		
	</div>
</section>




<!-- =========================
    Doyens SECTION   
============================== -->
<section id="speakers" class="parallax-section">
	<div class="container">
		<div class="row">

			<div class="col-md-12 col-sm-12 wow bounceIn">
				<div class="section-title">
					<h2>Our Doyens</h2>
					<p>Full potential teamates in our organization</p>
				</div>
			</div>

			<!-- Testimonial Owl Carousel section
			================================================== -->
			<div id="owl-speakers" class="owl-carousel">


				<?php
					foreach ($doyens_section as $key => $data) {

					if($key%2!=0)
					{
				?>
					<div class="item wow fadeInUp col-md-3 col-sm-3" data-wow-delay="0.9s">
						<div class="speakers-wrapper">
							<img src="<?= $data['image'] ?>" style="max-width: 300px;" class="img-responsive" alt="speakers">
								<div class="speakers-thumb">
									<h3><?= $data['name'] ?></h3>
									<h6><?= $data['title'] ?></h6>
								</div>
						</div>
					</div>

				<?php
					}	#end of if
					else
					{
				?>
					<div class="item wow fadeInUp col-md-3 col-sm-3" data-wow-delay="0.6s">
						<div class="speakers-wrapper">
							<img src="<?= $data['image'] ?>" style="max-width: 300px;" class="img-responsive" alt="speakers">
								<div class="speakers-thumb">
									<h3><?= $data['name'] ?></h3>
									<h6><?= $data['title'] ?></h6>
								</div>
						</div>
					</div>
				<?php 
					} #end of else
				?>

				<?php 
					} #end of foreach
				?>	
			</div>

		</div>
	</div>
</section>



<!-- =========================
    Our Service SECTION   
============================== -->
<section id="faq" class="parallax-section">
	<div class="container">
		<div class="row">

			<!-- Section title
			================================================== -->
			<div class="wow bounceIn col-md-offset-2 col-md-8 col-sm-offset-1 col-sm-10 text-center">
				<div class="section-title">
					<h2>Our Service</h2>
					<p>Comeplete dedication with desired output</p>
				</div>
			</div>

			<div class="wow fadeInUp col-md-offset-1 col-md-10 col-sm-offset-1 col-sm-10" data-wow-delay="0.9s">
				<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">


					<?php

						foreach ($our_service_section as $key => $data) {


							if($key==0)
							{



					?>
						<div class="panel panel-default">
	   						<div class="panel-heading" role="tab" id="<?=$key?>">
	      						<h4 class="panel-title">
	        						<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#<?="BYID".$data['id']?>" aria-expanded="false" aria-controls="<?="BYID".$data['id']?>">
	          							<?= $data['name'] ?>
	        						</a>
	      						</h4>
	    					</div>
	   						<div id="<?="BYID".$data['id']?>" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="<?=$key?>">
	      						<div class="panel-body">
	        						<p><?= $data['details'] ?></p>
	      						</div>
	   						 </div>
	 					</div>


					<?php
							}

							else{

					?>
							<div class="panel panel-default">
		   						<div class="panel-heading" role="tab" id="<?=$key?>">
		      						<h4 class="panel-title">
		        						<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#<?="BYID".$data['id']?>" aria-expanded="false" aria-controls="<?="BYID".$data['id']?>">
		          							<?= $data['name'] ?>
		        						</a>
		      						</h4>
		    					</div>
		   						<div id="<?="BYID".$data['id']?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="<?=$key?>">
		      						<div class="panel-body">
		                            	<p><?= $data['details'] ?></p>
		      						</div>
		   						 </div>
		 					</div>

					<?php 
							}
					?>

						

					<?php
						}

					?>



 				 </div>
			</div>

		</div>
	</div>
</section>



<!-- =========================
    CONTACT SECTION   
============================== -->
<section id="contact" class="parallax-section" style="background: url('img/contact-bg.jpg') 50% 0 repeat-y fixed">
	<div class="container">
		<div class="row">

			<div class="wow fadeInUp col-md-offset-1 col-md-5 col-sm-6" data-wow-delay="0.6s">
				<div class="contact_des">
					<h2>Our Address</h2>
					<p><i class="fa fa-map-marker" aria-hidden="true">&nbsp&nbsp</i><span>Address: <?= $office_info_section['address'] ?></span></p>
					<p><i class="fa fa-phone" aria-hidden="true">&nbsp&nbsp</i><span>Phone: <?= $office_info_section['contact'] ?></span></p>
					<p><i class="fa fa-envelope" aria-hidden="true">&nbsp&nbsp</i><span>Email: <?= $office_info_section['email'] ?></span></p>
					
				</div>
			</div>

			<div class="wow fadeInUp col-md-5 col-sm-6" data-wow-delay="0.9s">
				<div class="contact_detail">
					<div class="section-title">
						<h2>Contact Us</h2>
					</div>
					<form action="backend_code.php" method="POST">
						<input name="name" type="text" class="form-control" id="name" autocomplete="off" placeholder="Name">

					  	<input name="email" type="email" class="form-control" autocomplete="off" id="email" placeholder="Email">

					  	<input name="contact" type="text" class="form-control" id="contact" autocomplete="off" placeholder="Contact" style="padding: 10px;">

					  	<textarea name="message" rows="5" autocomplete="off" class="form-control" id="message" placeholder="Message"></textarea>
						<div class="col-md-6 col-sm-10">
							<input name="btn-text" type="submit" class="form-control" value="SEND">
						</div>
					</form>
				</div>
			</div>

		</div>
	</div>
</section>


<!-- =========================
    FOOTER SECTION   
============================== -->
<footer>
	<div class="container">
		<div class="row">

			<div class="col-md-12 col-sm-12">
				<p class="wow fadeInUp" data-wow-delay="0.6s"><!-- Copyright &copy; 2020 Your Company --> <?=
				$footer_section['footer_text']?> 
                    
                    | Design & Developed by: <span style="color:blue;">RABBI</span></p>

				<ul class="social-icon">
					<li><a href="https://www.facebook.com/yeamin.akram/" target="_blank" class="fa fa-facebook wow fadeInUp" data-wow-delay="1s"></a></li>
					<li><a href="https://github.com/YeaminRabbi" target="_blank" class="fa fa-github wow fadeInUp" data-wow-delay="1.3s"></a></li>
					<!-- <li><a href="#" class="fa fa-dribbble wow fadeInUp" data-wow-delay="1.6s"></a></li>
					<li><a href="#" class="fa fa-behance wow fadeInUp" data-wow-delay="1.9s"></a></li>
					<li><a href="#" class="fa fa-google-plus wow fadeInUp" data-wow-delay="2s"></a></li> -->
				</ul>

			</div>
			
		</div>
	</div>
</footer>


<!-- Back top -->
<a href="#back-top" class="go-top"><i class="fa fa-angle-up"></i></a>


<!-- =========================
     SCRIPTS   
============================== -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.parallax.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/custom.js"></script>
</body>
</html>