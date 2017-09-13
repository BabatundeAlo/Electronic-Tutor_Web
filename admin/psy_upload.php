<?php
	include '../includes/config.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=no, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

	<title>Admin Home</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/simple-sidebar.css" rel="stylesheet">
	

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->




</head>

<body>

    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="index.php">
                        E-tutor Admin
                    </a>
                </li>
                <li>
                    <a href="dash.php">Dashboard</a>
                </li>
                <li>
                    <a href="student.php">Students</a>
                </li>
                <li>
                    <a href="science_view.php">Science</a>
                </li>
               <li>
                    <a href="eng_view.php">Engineering</a>
                </li>
                <li>
                    <a href="law_view.php">Law</a>
                </li>
                <li>
                    <a href="phi_view.php">Philosophy</a>
                </li>
                 <li>
                    <a href="psy_view.php">psychology</a>
                </li>
                 <li>
                    <a href="bus_view.php">Business</a>
                </li>
                <li>
                    <a href="#">Contact</a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
		<div class="container">	
		<?php
			include 'menu.php';
		?>
		</div>
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <button type="submit" class="btn btn-primary" ><a href="psy_view.php" style="color:white;">Go Back</a></button>
                        <br/>
                        <hr/>
						<form action="" method="post" enctype="multipart/form-data">
						
						<div class="form">
								<p>
                                    <input type="text" class="form-control" name="book_name"  placeholder="Book Name" required>
		
								</p>	
		
								<p>

                                    <input type="text" class="form-control" name="book_cost"  placeholder="Book Price" required>
								</p>
								<p>
                                    <span>Upload Book Image</span>
                                     <input type="file" class="form-control"  name="image"  placeholder="Book Image" required>
								</p>
                               
								<p>
                                     <input type="text" class="form-control" name="capacity"  placeholder="Book Capacity" required>
								</p>
                                <p>
                                    <span>Upload Book</span>
                                     <input type="file" class="form-control"  name="book"  placeholder="Book" required>
								</p>	
							
						</div>
						
						<div class="buttons">
                             <button type="submit" class="btn btn-primary" >preview</button>
                            <button type="submit" class="btn btn-primary" value="submit" name="send">submit</button>
						</div>
						
					</form>
					<?php
							if(isset($_POST['send'])){
								$target_path1 = "../books/uploads/";
								$target_path = "../books/";
								$target_path = $target_path . basename ($_FILES['image']['name']);
                                $target_path1 = $target_path1 . basename ($_FILES['book']['name']);
								if(move_uploaded_file($_FILES['image']['tmp_name'],$target_path)){
                               if(move_uploaded_file($_FILES['book']['tmp_name'],$target_path1)){ }
								$image = basename($_FILES['image']['name']);
                                $book = basename($_FILES['book']['name']);
								$book_name = $_POST['book_name'];
								$book_cost = $_POST['book_cost'];
								$capacity = $_POST['capacity'];
								
								$qr = "INSERT INTO psychology (image,book,book_name,book_cost,capacity,status) 
													VALUES ('$image','$book','$book_name','$book_cost','$capacity','Available')";
								$res = $conn->query($qr);
								if($res === TRUE){
									echo "<script type = \"text/javascript\">
											alert(\"Book Succesfully Added\");
											window.location = (\"psy_view.php\")
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
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

</body>

</html>