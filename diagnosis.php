<!DOCTYPE html>
<html lang="en">
<head>
	<title>Car Rental System</title>
	<meta charset="utf-8">
	<meta name="author" content="">
	<meta name="description" content="fully responsive html5/css3 home page website template"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
	
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

			<section class="caption">
				<h2 class="caption" style="text-align: center; color:#000000;"></h2>
				<h3 class="properties" style="text-align: center; color:#000000;">Car Faults and Diagnosis</h3>
			</section>
	</section><!--  end hero section  -->


	<section class="search">
		<div class="wrapper">
		<div>
			
			
			 <table cellpadding="0" cellspacing="0" border="0" class="table  table-bordered" id="example">
							 <thead>
							<tr>
				
								<th width="20">Vehicle Make</th>
								<th>Car Type</th>
								<th>Year of Manufacture</th>
								<th>Type</th>
								<th>Problem</th>
								<th>Causes</th>
								<th>Solution</th>
							
							</tr>
							 </thead>
							   <tbody>
							<?php
								include 'includes/config.php';
								$select = "SELECT * FROM diagnosis";
								$result = $conn->query($select);
								while($row = $result->fetch_assoc()){
							?>
							<tr>
						
								<td width="20"><h3><?php echo $row['car_type'] ?></h3></td>
								<td><?php echo $row['car_name'] ?></td>
								<td><?php echo $row['year'] ?></td>
								<td><?php echo $row['type'] ?></td>
								<td><?php echo $row['problem'] ?></td>
								<td><?php echo $row['causes'] ?></td>
								<td><?php echo $row['solution'] ?></td>
								
							</tr>
							<?php
								}
							?>
						  </tbody>
						</table>
			<br/>
			<br/>
			
			
			</div>
			<a href="#" class="advanced_search_icon" id="advanced_search_btn"></a>
		</div>

	</section><!--  end search section  -->

	<footer>
		<div class="wrapper footer">
			<ul>
				<li class="about">
					<p>Bounty touch service debuted at the Frankfurt Motor Show, blending the practicality of a compact crossover with the exciting performance of a sports car.</p>
					<ul>
						<li><a href="http://facebook.com/nonny.valentino" class="facebook" target="_blank"></a></li>
						<li><a href="http://twitter.com/nonny.valentino" class="twitter" target="_blank"></a></li>
						<li><a href="http://plus.google.com/+ChinonsoOkafor" class="google" target="_blank"></a></li>
						<li><a href="#" class="skype"></a></li>
					</ul>
				</li>

				<li class="links">
					<ul>
						<li>OUR COMPANY</li>
						<li><a href="#">About Us</a></li>
						<li><a href="#">Terms</a></li>
						<li><a href="#">Policy</a></li>
						<li><a href="#">Contact</a></li>
					</ul>
				</li>

				

				<li class="links">
					<ul>
						<li>OUR CAR TYPES</li>
						<li><a href="#">Nissan</a></li>
						<li><a href="#">Infiniti</a></li>
						<li><a href="#">Datsun</a></li>
						<li><a href="#">Heritage</a></li>
						<li><a href="#">Motorsports</a></li>
					</ul>
				</li>

				
			</ul>
		</div>

		<div class="copyrights wrapper">
			Copyright &copy; <?php echo date("Y")?> All Rights Reserved
		</div>
	</footer><!--  end footer  -->
	
</body>
</html>