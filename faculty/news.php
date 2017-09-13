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

	<script type="text/javascript">
		function sureToApprove(id){
			if(confirm("Are you sure you want to delete this book?")){
				window.location.href ='del-news.php?id='+id;
			}
		}
	</script>
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
                        <a href="#">News-letter</a>
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
                <h1>Uploaded Articles can be managed Here</h1>
                 <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
						<div class="panel panel-info">
      <div class="panel-heading">
        <h3 class="panel-title">Articles</h3>

      </div>
      <div class="panel-body">
    <table class="table">
        <thead>
          <tr>
			  <th>#</th>
			   <th>Title</th>
           <th>image</th>
           <th>Content Control</th>
          </tr>
        </thead>
        <tbody>
         <?php
								include '../includes/config.php';
								$select = "SELECT * FROM news";
								$result = $conn->query($select);
								while($row = $result->fetch_assoc()){
							?>
							<tr>
								<td><input type="checkbox" class="checkbox" /></td>
									<td><a href="#"><?php echo $row['title'] ?></a></td>
								<td><?php echo $row['image'] ?></td>
								<td><a href="javascript:sureToApprove(<?php echo $row['news_id'];?>)" class="ico del">Delete</a></td>
							</tr>
							<?php
								}
							?>
								
        </tbody>
		
      </table>
    	<button type="submit" class="btn btn-info" ><a href="news_upload.php" style="color:white;">Upload Article</a></button>
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
