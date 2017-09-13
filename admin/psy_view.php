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

	<script type="text/javascript">
		function sureToApprove(id){
			if(confirm("Are you sure you want to delete this book?")){
				window.location.href ='delete_psybook.php?id='+id;
			}
		}
	</script>


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
                    <a href="#">psychology</a>
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
						<div class="panel panel-primary">
      <div class="panel-heading">
        <h3 class="panel-title">Psychology Books</h3>

      </div>
      <div class="panel-body">
    <table class="table">
        <thead>
          <tr>
			  <th>#</th>
			   <th>Book Name</th>
            <th>Capacity</th>
           <th>Book</th>
           <th>Content Control</th>
          </tr>
        </thead>
        <tbody>
         <?php
								include '../includes/config.php';
								$select = "SELECT * FROM psychology";
								$result = $conn->query($select);
								while($row = $result->fetch_assoc()){
							?>
							<tr>
								<td><input type="checkbox" class="checkbox" /></td>
									<td><a href="#"><?php echo $row['book_name'] ?></a></td>
								<td><a href="#"><?php echo $row['capacity'] ?></a></td>
								<td><?php echo $row['book'] ?></td>
								<td><a href="javascript:sureToApprove(<?php echo $row['book_id'];?>)" class="ico del">Delete</a></td>
							</tr>
							<?php
								}
							?>
								
        </tbody>
		
      </table>
	<button type="submit" class="btn btn-primary"  onclick="window.print()">Print Here</button>
    	<button type="submit" class="btn btn-primary" ><a href="psy_upload.php" style="color:white;">Upload Book</a></button>
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