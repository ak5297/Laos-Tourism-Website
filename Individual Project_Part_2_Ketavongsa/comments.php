<!-- 
Alex Ketavongsa
4/15/19
Comments page
-->

<?php
    $path = './';
  	require $path.'../../../dbConnect.inc';
	if ($mysqli) {
	  if (isset($_GET['name']) && isset($_GET['comment'])) {
	  if( $_GET['name']!='' && $_GET['comment']!='' ){
            
			/* 1)prepare my query */
            
			/* 2)bind */
            $stmt = $mysqli->prepare("INSERT INTO project_comments (name, comment, date) VALUES (?, ?, ?)");
            $stmt->bind_param("sss", $_GET['name'], $_GET['comment'], $_GET['date']);
            
			/* 3)execute */
            $stmt->execute();
            
			/* 4)close */ 
            $stmt->close();
          
          header("Location: comments.php");

		
	  }//end of if to make sure data is sent using $_GET
      }//end of isset
	  //get contents of table and send back...
      $sql = 'SELECT name, comment, date FROM project_comments';
	  $res=$mysqli->query('SELECT id, name, comment, date FROM project_comments');
	  if($res){
		while($rowHolder = mysqli_fetch_array($res,MYSQLI_ASSOC)){
			$records[] = $rowHolder;
		}
	  }
	}
        
?>


<!DOCTYPE html>
<html lang="en">

<head>
<title>Comments</title>
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
        
            <a class="active" href="comments.php">Comments</a>
        
		    <a href="feedback.php">Feedback</a>
		    
		    <a href="about.php">About</a>
		    
		    <a href="references.php">References</a>
		    
		    <a href="rubric.php">Rubric</a>

			<a href="landmarks.php">Landmarks</a>
			
			<a href="food.php">Food</a>
			
			<a href="culture.php">Culture</a>
			
			<a href="regions.php">Regions</a>
			
			<a href="history.php">History</a>
			
			<a  href="home.php">Home</a>
			<a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
  </div>
</header>

<div class="body-title">

<h1>Leave a comment for us!</h1>
</div>

<div class="content">

<form action="comments.php" method="GET" onsubmit="return validateForm();">	
    
    <div id="comments">
    <p>Name: *</p> 
        <input type="text" id="name" name="name" placeholder="Your name" />
        <span id="error-name"></span>
    
        <p>Please submit your comment below: *</p>
        <textarea maxlength="600" id="comment" name="comment" rows="9" cols="100" placeholder="REQUIRED"></textarea>
        <span id="error-comment"></span>
        
    <input type="submit" name="submit" />
    </div>
    
    <h3>Comments List:</h3>

<table>
    <tr>
    <th>Comment Number</th>
    <th>Name</th>
    <th>Comment</th>
    <th>Date</th>
    </tr>

	<?php
    if(!empty($records))
		foreach($records as $this_row){
			echo '<tr><td>'.$this_row['id'] . "</td><td> " . $this_row['name']. "</td><td> " . $this_row['comment']. "</td><td> " . $this_row['date']. '</td></tr>';
		}
    else 
            echo 'There are no records!';
	?>
</table>
  
</form>


</div>

 <footer>		 
       &copy; Copyright 2019 Alex Ketavongsa
     
<?php
echo "<br />";
echo "Last modified: ".date("F d Y h:iA.",filemtime("comments.php"));
?>

</footer>
<!-- add a style tag for the 700px media query -->	   
</body>
</html>