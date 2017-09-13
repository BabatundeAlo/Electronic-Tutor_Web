<?php
	include '../includes/config.php';
	$id = $_REQUEST['id'];
		$query = "DELETE FROM psychology WHERE book_id = '$id'";
	$result = $conn->query($query);
	if($result === TRUE){
		echo "<script type = \"text/javascript\">
					alert(\"Book Successfully Deleted\");
					window.location = (\"psy_view.php\")
				</script>";
	}
?>
