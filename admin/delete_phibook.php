<?php
	include '../includes/config.php';
	$id = $_REQUEST['id'];
		$query = "DELETE FROM philosophy WHERE book_id = '$id'";
	$result = $conn->query($query);
	if($result === TRUE){
		echo "<script type = \"text/javascript\">
					alert(\"Book Successfully Deleted\");
					window.location = (\"phi_view.php\")
				</script>";
	}
?>
