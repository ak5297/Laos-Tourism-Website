<!DOCTYPE html>
<html lang="en">

<!-- 
Alex Ketavongsa
2/13/19
My survey form 
-->

<head>
<title>Feedback</title>
<!-- adjusts viewport based on device screen size -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="assets/css/project1.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Staatliches" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Quattrocento" rel="stylesheet">
<link rel="shortcut icon" type="image/x-icon" href="assets/laos_logo.png" />
<script src="assets/js/project1.js"></script>
</head>

<body class="BodyText">

<!-- start of nav bar -->
<header>
		<div class="topnav" id="myTopnav">
	 		<img src="assets/images/laos_logo.png" alt="Logo">
            
            <a href="comments.php">Comments</a>
	 		
	 		<a class="active" href="feedback.php">Feedback</a>
			
			<a href="about.php">About</a>

			<a href="references.php">References</a>
			
			<a href="rubric.php">Rubric</a>

			<a href="landmarks.php">Landmarks</a>
			
			<a  href="food.php">Food</a>
			
			<a href="culture.php">Culture</a>
			
			<a href="regions.php">Regions</a>
			
			<a href="history.php">History</a>

		 	<a href="home.php">Home</a>
			<a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>
</header>
	
<form action="process3.php" method="POST" class="form"
     onsubmit="return validateForm(); ">
    
     <h3> Tell us about your experience: </h3>
     	<p>Name: </p>
     	<input id="name" type="text" name="person" placeholder="Required" /><span class="asteric"> * </span>
     	<span id="error-name"></span>
     	
     	<p>Email: </p>
     	<input id="email" type="email" name="email" placeholder="abc1234@example.com" /> 
     	 
     	 <div class="spacing">
     	<p>If you have been to Laos, when did you visit? </p>
     	<input type="date" id="visitdate" name="visit" />		
     	<span id="error-visit"></span> 
		</div>
		
		<div class="spacing">
		<fieldset id="learn-box">
		<legend>Did you learn something new about Laos?</legend>
			<label><input id="learn-yes" type="radio" name="learn" value="yes">Yes</label><br>
            <label><input id="learn-no" type="radio" name="learn" value="no">No</label><br>
	    <p id="error"></p>
	    </fieldset>
	    </div>
	    
		<div class="spacing">
		<fieldset>
		<legend>What did you find most interesting about Laos? (select all that apply)</legend>
	        <label><input class="checkboxes" type="checkbox" name="most-interesting[history]" value="history">History</label><br> 
            <label><input class="checkboxes" type="checkbox" name="most-interesting[regions]" value="regions">Regions</label><br> 
            <label><input class="checkboxes" type="checkbox" name="most-interesting[culture]" value="culture">Culture</label><br> 
            <label><input class="checkboxes" type="checkbox" name="most-interesting[food]" value="food">Food</label><br> 
            <label><input class="checkboxes" type="checkbox" name="most-interesting[landmarks]" value="landmarks">Landmarks</label><br> 
        </fieldset>
    	</div>
    
        <div class="spacing">
		<fieldset>
		<legend>Which Laotian dish would you like to try? (select all that apply)</legend>
	        <label><input class="checkboxes" type="checkbox" name="food[rice]" value="rice">Sticky Rice</label><br> 
            <label><input class="checkboxes" type="checkbox" name="food[larb]" value="larb">Larb</label><br> 
            <label><input class="checkboxes" type="checkbox" name="food[kowpiek]" value="kowpiek">Kow Piek</label><br> 
            <label><input class="checkboxes" type="checkbox" name="food[gangnormai]" value="gangnormai">Gang Nor Mai</label><br> 
            <label><input class="checkboxes" type="checkbox" name="food[tam]" value="tam">Tam</label><br> 
        </fieldset>
    	</div>
    
        <div class="spacing">
		<fieldset>
		<legend>Which region would you like to visit? (select all that apply)</legend>
	        <label><input class="checkboxes" type="checkbox" name="region[north]" value="north">Northern Laos</label><br> 
            <label><input class="checkboxes" type="checkbox" name="region[central]" value="central">Central Laos</label><br> 
            <label><input class="checkboxes" type="checkbox" name="region[south]" value="south">Southern Laos</label><br> 
        </fieldset>
    	</div>
    
        <div class="spacing">
		<fieldset>
		<legend>Which landmark(s) would you most likely visit? (select all that apply)</legend>
	        <label><input class="checkboxes" type="checkbox" name="landmarks[waterfall]" value="north">Kuang Si Waterfalls</label><br> 
            <label><input class="checkboxes" type="checkbox" name="landmarks[jars]" value="central">Plain of Jars</label><br> 
            <label><input class="checkboxes" type="checkbox" name="landmarks[luang]" value="south">Pha That Luang</label><br> 
        </fieldset>
    	</div>
    
        <div class="spacing">
        <p> On a scale of 1-10, how likely are you to visit Laos? </p>
        1 <input id="scale" type="range" min="1" max="10" name="scale"> 10
		</div>
    
        <p>If you have any other feedback you would like to provide, submit it below:</p>
            <textarea maxlength="600" name="commentbox" rows="7" cols="75" placeholder = "OPTIONAL" ></textarea>
		    
       <input class="button" type="submit" id="submit" value="Send" />
       
       </form>
      
 <footer>
       &copy; Copyright 2019 Alex Ketavongsa
     
     <?php
echo "<br />";
echo "Last modified: ".date("F d Y h:iA.",filemtime("feedback.php"));
?>
</footer>

       </body>
       </html>