<!DOCTYPE html>
<html lang="en">
<head>
<title><?php echo $page; ?></title>
<!-- adjusts viewport based on device screen size -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="assets/css/project1.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Staatliches" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Quattrocento" rel="stylesheet">
<link rel="shortcut icon" type="image/x-icon" href="assets/images/laos_logo.png" />
<script src="assets/js/project1.js"></script>

</head>

<body class="BodyText"> 

<!-- start of nav bar -->
<header>
	<div class="topnav" id="myTopnav">
			<img src="assets/images/laos_logo.png" alt="Logo">
        
            <a <?php echo ($page == 'comments') ? "class='active'" : ""; ?> href="comments.php">Comments</a>
			
		    <a <?php echo ($page == 'feedback') ? "class='active'" : ""; ?> href="feedback.php">Feedback</a>
		    
		    <a <?php echo ($page == 'about') ? "class='active'" : ""; ?> href="about.php">About</a>
		    
		    <a <?php echo ($page == 'references') ? "class='active'" : ""; ?> href="references.php">References</a>
		    
		    <a <?php echo ($page == 'rubric') ? "class='active'" : ""; ?> href="rubric.php">Rubric</a>

			<a <?php echo ($page == 'landmarks') ? "class='active'" : ""; ?> href="landmarks.php">Landmarks</a>
			
			<a <?php echo ($page == 'food') ? "class='active'" : ""; ?> href="food.php">Food</a>
			
			<a <?php echo ($page == 'culture') ? "class='active'" : ""; ?> href="culture.php">Culture</a>
			
			<a <?php echo ($page == 'regions') ? "class='active'" : ""; ?> href="regions.php">Regions</a>
			
			<a <?php echo ($page == 'history') ? "class='active'" : ""; ?> href="history.php">History</a>
			
			<a <?php echo ($page == 'home') ? "class='active'" : ""; ?>  href="home.php">Home</a>
			<a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>
</header>
</body>
</html>    
          
          