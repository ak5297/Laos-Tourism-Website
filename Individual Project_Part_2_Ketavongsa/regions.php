<!DOCTYPE html>
<html lang="en">
<header>
<link rel="stylesheet" type="text/css" href="assets/css/project1.css"/>
<link rel="shortcut icon" type="image/x-icon" href="assets/images/laos_logo.png" />
<script src="assets/js/project1.js"></script>
</header>
</html>

<?php
	$page='regions';
    $filename='regions.php';
	$path='./';
	include($path.'assets/inc/header.php');
?>

<?php
	    require '../../../dbConnect.inc';        
		$sql = "SELECT content FROM modularSite where page='$page'";
		$result = $mysqli->query($sql);

		if($result->num_rows > 0){
			//output the data for each row
			while ($row = $result->FETCH_ASSOC()) {
				echo $row['content'];
			}
		}else{
			echo "0 results, did something wrong!";
		}
	?>
<?php
	require($path.'assets/inc/footer.php');
    mysqli_close($mysqli);

?>