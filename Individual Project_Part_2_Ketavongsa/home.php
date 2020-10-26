<?php
	$path='./';
	$page='home';
    $filename='home.php';
	include ($path.'assets/inc/header.php');
?>

<?php

	    require '../../../dbConnect.inc'; 
		$sql = "SELECT content, image FROM modularSite where page='$page'";
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
	require('assets/inc/footer.php');
    mysqli_close($mysqli);

?>