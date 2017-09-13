<?php
	include '../includes/config.php';
	$id = $_REQUEST['id'];
		$query = "DELETE FROM videos WHERE video_id = '$id'";
	$result = $conn->query($query);
	if($result === TRUE){
		echo "<script type = \"text/javascript\">
					alert(\"Video Successfully Deleted\");
					window.location = (\"videos.php\")
				</script>";
	}
?>
