<!DOCTYPE html>
<html lang="en">
<head>
	<title>HNAUB E-tutor System</title>
	<meta charset="utf-8">
	<meta name="author" content="">
	<meta name="description" content="fully responsive html5/css3 home page website template"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link id="t-colors" href="skins/default.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet" />
<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/responsive.css">

	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
</head>
<body>

	<section class="">
		<?php
			include 'header.php';
		?>
	</section><!--  end hero section  -->
<br/>
	<section id="content" >
<div class="container">

<div class="row">
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
		<form  method="post">
			<h2>Please Sign Up <small>It's free and always will be.</small></h2>
			<hr class="colorgraph">
			<div class="row">
			<div class="form-group">
				<input type="text" name="fname"  class="form-control input-lg" placeholder="Full Name" tabindex="4" required>
			</div>
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
                        <input type="text" name="phone" class="form-control input-lg" placeholder="Phone Number" tabindex="1" required>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
					<select class="form-control input-lg" placeholder="Gender" name="gender">
									<option> Select Gender </option>
									<option> Male </option>
									<option> Female </option>
								</select>
					</div>
				</div>

			
			<div class="form-group">
				<input type="email" name="email" class="form-control input-lg" placeholder="Email Address" tabindex="4" required>
			</div>
				<div class="form-group">
				<input type="text" name= "location" class="form-control input-lg" placeholder="Course" tabindex="4" required>
			</div>
		
				
					<div class="form-group">
						<input type="password"  name="id_no" class="form-control input-lg" placeholder="Password" tabindex="5" required>
					</div>
		
			
			
			<hr class="colorgraph">
			<div class="row">
				<div class="col-xs-12 col-md-6"><input type="submit" name="save" value="Register" class="btn btn-theme btn-block btn-lg" tabindex="7"></div>
				
			</div>
		</form>
		<?php
						if(isset($_POST['save'])){
							include 'includes/config.php';
							$fname = $_POST['fname'];
						    $phone = $_POST['phone'];
							$gender = $_POST['gender'];
							$email = $_POST['email'];
							$location = $_POST['location'];
							$id_no = $_POST['id_no'];
							
							$qry = "INSERT INTO student (fname,id_no,gender,email,phone,location)
							VALUES('$fname','$id_no','$gender','$email','$phone','$location')";
							$result = $conn->query($qry);
							if($result == TRUE){
								echo "<script type = \"text/javascript\">
											alert(\"Successfully Registered.\");
											window.location = (\"account.php\")
											</script>";
							} else{
								echo "<script type = \"text/javascript\">
											alert(\"Registration Failed. Try Again\");
											window.location = (\"signup.php\")
											</script>";
							}
						}
						
					  ?>

</div>

</div>
</div>
	</section>

	

<footer>
	<div class="container">
		<div class="row">
			<div class="col-sm-3 col-lg-3">
				<div class="widget">
					<h4>Get in touch with us</h4>
					<address>
					<strong>Sailor company Inc</strong><br>
					 Sailor suite room V124, DB 91<br>
					 Someplace 71745 Earth </address>
					<p>
						<i class="icon-phone"></i> (123) 456-7890 - (123) 555-7891 <br>
						<i class="icon-envelope-alt"></i> email@domainname.com
					</p>
				</div>
			</div>
			<div class="col-sm-3 col-lg-3">
				<div class="widget">
					<h4>Information</h4>
					<ul class="link-list">
						<li><a href="#">Press release</a></li>
						<li><a href="#">Terms and conditions</a></li>
						<li><a href="#">Privacy policy</a></li>
						<li><a href="#">Career center</a></li>
						<li><a href="#">Contact us</a></li>
					</ul>
				</div>
				
			</div>
			<div class="col-sm-3 col-lg-3">
				<div class="widget">
					<h4>Pages</h4>
					<ul class="link-list">
						<li><a href="#">Press release</a></li>
						<li><a href="#">Terms and conditions</a></li>
						<li><a href="#">Privacy policy</a></li>
						<li><a href="#">Career center</a></li>
						<li><a href="#">Contact us</a></li>
					</ul>
				</div>
			</div>
			<div class="col-sm-3 col-lg-3">
				<div class="widget">
					<h4>Newsletter</h4>
					<p>Fill your email and sign up for monthly newsletter to keep updated</p>
                    <div class="form-group multiple-form-group input-group">
                        <input type="email" name="email" class="form-control">
                        <span class="input-group-btn">
                            <button type="button" class="btn btn-theme btn-add">Subscribe</button>
                        </span>
                    </div>
				</div>
			</div>
		</div>
	</div>
	<div id="sub-footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="copyright">
						<p>&copy; Sailor Theme - All Right Reserved</p>
                        <div class="credits">
                            <!-- 
                                All the links in the footer should remain intact. 
                                You can delete the links only if you purchased the pro version.
                                Licensing information: https://bootstrapmade.com/license/
                                Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Sailor
                            -->
                            <a href="https://bootstrapmade.com/free-business-bootstrap-themes-website-templates/">Business Bootstrap Themes</a> by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                        </div>
					</div>
				</div>
				<div class="col-lg-6">
					<ul class="social-network">
						<li><a href="#" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#" data-placement="top" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
						<li><a href="#" data-placement="top" title="Pinterest"><i class="fa fa-pinterest"></i></a></li>
						<li><a href="#" data-placement="top" title="Google plus"><i class="fa fa-google-plus"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	</footer><!--  end footer  -->
	
</body>
</html>