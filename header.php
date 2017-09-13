<?php
	session_start();
	error_reporting("E-NOTICE");
?>
<header>
<link href="css/style.css" rel="stylesheet" />
			<div class="top">
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<ul class="topleft-info">
								<li><i class="fa fa-phone"></i> +229 997 467 11</li>
							</ul>
						</div>
						<div align="right">
						<a   href="account.php" style="color:#444;">Student Login</a> &nbsp;&nbsp;&nbsp;
					<a  href="login.php" style="color:#444;">Admin Login</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					|<a  href="flogin.php" style="color:#444;">Faculty Login</a>|
					</div>
					</div>
				</div>
			</div>	
			
        <div class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html"><img src="img/logo.png" alt="" width="199" height="52" /></a>
                </div>
                <div class="navbar-collapse collapse ">
                    <ul class="nav navbar-nav">
<?php
						if(!$_SESSION['email'] && (!$_SESSION['pass'])){
					?>
                        <li >
							<a href="index.php">Home</i></a>		
						
						
						<li >
							<a href="about.php" >About us</i></a>		
						
						</li></li>
					
                       	<li><a href="message_admin.php">Contact</a></li>

						   
				
                    </ul>
					<?php
						} else{
					?>
					<div class="navbar-collapse collapse ">
							<ul class="nav navbar-nav">
								<li><a href="index.php">Home</a></li>
								<li ><a href="books.php" >Study Materials</a></li>
								<li ><a href="news.php" >News Letter</i></a>	</li>
						        <li ><a href="videos.php" >Video Tutorials</i></a></li>
								<li><a href="message_admin.php">Message Admin</a></li>
								<li><a href="admin/logout.php">Logout</a></li>
							</ul>
					<?php
						}
					?>
                </div>
            </div>
        </div>
	</header>
