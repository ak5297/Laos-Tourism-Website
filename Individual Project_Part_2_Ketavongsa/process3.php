<?php

//var_dump($_POST);

	$safeName = '/^[A-Za-z ]+$/';
	$safeComment = '/^[A-Za-z\d \'",.!?()#]+$/';

	function test_input($data) {
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  $data = filter_var($data, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
	  return $data;
	}
	
    if (preg_match($safeName, $_POST["person"]))
        if (!empty($_POST["person"]))    {
           $person = test_input($_POST["person"]);
        }
        else {
           $person = "No visitor name provided by the user.";
        }
    else {
        $person = "Some unsafe characters are in the visitor name input field.";
    }

 if (!empty($_POST['email'])) {
       $email = test_input($_POST['email']);
   }
   else{
       $email = "Please enter in your email!";
   }

    if (!empty($_POST['visit'])) {
        $visit = test_input($_POST['visit']);
    }
    else {
        $visit = "Date was not selected on the form";
    }

 if (!empty($_POST['learn'])) {
        $learn = test_input($_POST['learn']);
    }
    else {
        $learn = "Learn was not selected on the form";
    }

 if (!empty($_POST['most-interesting'])) {
        $mostinteresting = implode(', ', $_POST['most-interesting']);
    }
    else {
        $mostinteresting = "Most interesting was not selected on the form";
    }

 if (!empty($_POST['food'])) {
        $food = implode(', ', $_POST['food']);
    }
    else {
        $food = "Food was not selected on the form";
    }

 if (!empty($_POST['region'])) {
        $region = implode(', ', $_POST['region']);
    }
    else {
        $region = "Region was not selected on the form";
    }

 if (!empty($_POST['landmarks'])) {
        $landmarks = implode(', ', $_POST['landmarks']);
    }
    else {
        $landmarks = "Landmarks was not selected on the form";
    }

    if (!empty($_POST['scale'])){
	      $scale   = test_input($_POST['scale']);
    }
    else
    {
        $scale = "Empty.";
    }
   
    $comment = "";
    if (!empty($_POST['commentbox']))
        if (!(preg_match($safeComment, $_POST['commentbox']))) {
               $comment = "JavaScript code COULD be in the comment input field.";

           }
        else {
			$comment = test_input($_POST['commentbox']);
        }   
    else{
		    $comment = "No Comment provided by the user!";
	    }
   

   /*  $food ="";
     if(!empty($_POST['check_list'])) 
          foreach($_POST['check_list'] as $food) {
            $food .=" $food, ";
          } // End of for loop
    else{
         $food = "None";
    }*/
    
    function getUserIpAddr(){
    if(!empty($_SERVER['HTTP_CLIENT_IP'])){
        //ip from share internet
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    }elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
        //ip pass from proxy
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }else{
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}

//echo 'User Real IP - '.getUserIpAddr();

//var_dump($_POST['check_list']);
    $person = test_input($_POST['person']);
	$email = test_input($_POST['email']);
	$visit = test_input($_POST['visit']);
	$learn = test_input($_POST['learn']);
	//$mostinteresting = implode(', ', $_POST['most-interesting']); /** gets the element(s) checked from the array of checkboxes */
	//$food = implode(', ', $_POST['food']); /** gets the element(s) checked from the array of checkboxes */
	//$region = implode(', ', $_POST['region']); /** gets the element(s) checked from the array of checkboxes */
    //$landmarks = implode(', ', $_POST['landmarks']); /** gets the element(s) checked from the array of checkboxes */
	$scale = test_input($_POST['scale']);
//    $comment = test_input($_POST['commentbox']);

	// $destination_email = "RITISTprofessor@gmail.com, yourusername@rit.edu";
    $destination_email = "ak5297@rit.edu";
	$email_subject = "Laos - visitor Alex Ketavongsa ISTE240.01";
        $email_body = "Visitor name:  $person\n";
        $email_body .= "Email: $email\n";
        $email_body .= "Date Visited: $visit\n";
        $email_body .= "Favorite Place: $learn\n";
        $email_body .= "Most interesting: $mostinteresting\n";
        $email_body .= "Favorite Food: $food\n";
        $email_body .= "Regions to visit: $region\n";
        $email_body .= "Landmarks to see: $landmarks\n";
        $email_body .= "Rating -> $scale\n";
        $email_body .= "Comment -> $comment\n";
        $email_body .= "User Real IP - ".getUserIpAddr();
        $email_body .= "\n\nThe above information was supplied by a user";
        $email_body .= " entering Data on the Feedback / Survey form. ";


//$email_body .= "\nNext, lets store the above in a Database table. ";

mail($destination_email, $email_subject, $email_body);
?>

<?php

/* Store the user entered data into the database */

    $path = './';
  	require $path.'../../../dbConnect.inc';
	if ($mysqli) {
	  if (isset($_POST['person']) && isset($_POST['learn'])) { 
	  if( $_POST['person']!='' && $_POST['learn']!='' ){
		
			/* we are using client entered data - therefore we HAVE TO USE a prepared statement 
            
            https://www.w3schools.com/php/php_mysql_prepared_statements.asp */
            
			/* 1)prepare my query */
          
            /* create variables for the checkbox arrays to avoid passing by reference error in bind parameters */
            //$interestingarray = implode(',', $_POST['most-interesting']);
            //$foodarray = implode(',', $_POST['food']);
            //$regionarray = implode(',', $_POST['region']);
            //$landmarksarray = implode(',', $_POST['landmarks']);
          
            
			/* 2)bind */
            $stmt = $mysqli->prepare("INSERT INTO Survey_feedback_form (name, email, visitdate, learnnew, mostinteresting, food, regions, landmarks,
            rating, comments) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("ssssssssss", $person, $email, $visit, $learn, $mostinteresting, $food, $region, $landmarks, $scale, $comment);

                
			/* 3)execute */
            $stmt->execute();
            
			/* 4)close */ 
            $stmt->close();

		
	  }//end of if to make sure data is sent using $_GET
      }//end of isset
	  //get contents of table and send back...
      $sql = 'SELECT id, name, email, visitdate, learnnew, mostinteresting, food, regions, landmarks,
            rating, comments FROM Survey_feedback_form';
	  $res=$mysqli->query('SELECT id, name, email, visitdate, learnnew, mostinteresting, food, regions, landmarks,
            rating, comments FROM Survey_feedback_form'); 
                            
   /* $sql = 'SELECT name, email, visitdate FROM Survey_feedback_form';
    $res=$mysqli->query('SELECT id, name, email, visitdate FROM Survey_feedback_form'); */
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
	<meta charset="utf-8"/>
	<title>Thank you for your Feedback</title>
    <link rel="stylesheet" type="text/css" href="assets/css/project1.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Staatliches" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quattrocento" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/laos_logo.png" />
    <script  src="assets/js/mouseover.js"></script>
</head>

<body>
<div class="topnav" id="myTopnav">
	 		<img src="assets/images/laos_logo.png" alt="Logo">
	 		
	 		<a class="active" href="feedback.php">Feedback</a>
			
			<a href="about.php">About</a>

			<a href="references.php">References</a>
			
			<a href="rubric.php">Rubric</a>

			<a href="landmarks.php">Landmarks</a>
			
			<a href="food.php">Food</a>
			
			<a href="culture.php">Culture</a>
			
			<a href="regions.php">Regions</a>
			
			<a href="history.php">History</a>

		 	<a href="home.php">Home</a>
			<a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>
    
    <div class="content">
   
    <figure class="firstpicture"> <p><a href="http://serenity.ist.rit.edu/~ak5297/240/project2/home.php">
        <img class="home" width="50" src="assets/images/blue_button.jpg"
             id="home" alt="Home"    title="Home"
             onmouseover="change('home','assets/images/red_button.jpg')"
             onmouseout ="change('home','assets/images/blue_button.jpg')" /></a> </p>
    </figure>
        
    <figure>
    <figcaption>Your feedback counts! Thank you so much for filling out our short survey. Your feedback will be reviewed and it will help us improve the content on our site to enhance your experience. </figcaption>
  	<img src="assets/images/thank-you.jpg" alt="Thank you very much for your feedback" />
	</figure>
    </div>
        

<footer>
       &copy; Copyright 2019 Alex Ketavongsa
    
    <?php
echo "<br />";
echo "Last modified: ".date("F d Y h:iA.",filemtime("process3.php"));
?>
</footer>
    
</body>
</html>