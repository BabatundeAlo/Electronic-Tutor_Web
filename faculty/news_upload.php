<?php
	include '../includes/config.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Faculty Home</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <style>
    body {
        padding-top: 70px;
        /* Required padding for .navbar-fixed-top. Remove if using .navbar-static-top. Change if height of navigation changes. */
    }
    </style>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Faculty Dashboard</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                 <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="news.php">News-letter</a>
                    </li>
                    <li>
                        <a href="videos.php">Videos</a>
                    </li>
                    
                </ul>
                 <ul class="nav navbar-nav navbar-right">
                  <li ><a href="logout.php" >Logout</a>
                    </li>
                    </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <div class="row">
            <div class="col-lg-12 text-center">
                <h1>Important informations can be passed to students Here</h1>
                <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                    
                        <button type="submit" class="btn btn-primary" ><a href="news.php" style="color:white;">Go Back</a></button>
                        <br/>
                        <hr/>
						<form action="" method="post" enctype="multipart/form-data">
						
						<div class="form">
								<p>
                                    <input type="text" class="form-control" name="title"  placeholder="Article Title" required>
		
								</p>	
		
								<p>

                                    <input type="text" class="form-control" name="content"  placeholder="Write content" required>
								</p>
								<p>
                                    <span>Upload Article Image</span>
                                     <input type="file" class="form-control"  name="image"  placeholder="Article Image" required>
								</p>
                               	
						</div>
						
						<div class="buttons">
                            <button type="submit" class="btn btn-primary" value="submit" name="send">submit</button>
						</div>
						
					</form>
					<?php
							if(isset($_POST['send'])){
								$target_path = "../news/";
								$target_path = $target_path . basename ($_FILES['image']['name']);
								if(move_uploaded_file($_FILES['image']['tmp_name'],$target_path)){
								$image = basename($_FILES['image']['name']);
								$title = $_POST['title'];
								$content = $_POST['content'];
								
								$qr = "INSERT INTO news (image,title,content,extras) 
													VALUES ('$image','$title','$content','1')";
								$res = $conn->query($qr);
								if($res === TRUE){
									echo "<script type = \"text/javascript\">
											alert(\"Article Succesfully Added\");
											window.location = (\"news.php\")
											</script>";
									}
								}
								else 'Failed';
							}
						?>
				</div>

			</div>
		
      </div>
    </div>
                     
			
					
	</div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- /#page-content-wrapper -->

    </div>
            </div>
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- jQuery Version 1.11.1 -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
