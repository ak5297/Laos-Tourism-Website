<?php
function test_input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
	}
	
	//var_dump($_POST);
	
	$name = test_input($_POST['name']);
	$email = test_input($_POST['email']);
	$visit = test_input($_POST['visit']);
	$learn = test_input($_POST['learn']);
	$mostinteresting = implode(', ', $_POST['most-interesting']); /** gets the element(s) checked from the array of checkboxes */
	$scale = test_input($_POST['scale']);
	//$destination_email = "ak5297@rit.edu";
	$destination_email = "ak5297@rit.edu, RITISTprofessor@gmail.com";
	$email_subject = "Laos - visitor Alex Ketavongsa ISTE240.01";
	$email_body .= "Visitor name: $name\n";
	$email_body .= "Visitor email: $email\n";
	$email_body .= "Date Visited: $visit\n";
	$email_body .= "Did you learn something new? : $learn\n";
	$email_body .= "What did you find most interesting? : $mostinteresting\n";
	$email_body .= "Rating: $scale\n";
	mail($destination_email, $email_subject, $email_body);
echo "Data Sent!";

/**
 * Alex Ketavongsa
 * Updated: 3/5/2019
 */
?>

<html>
<head>
    <script  src="../assets/js/mouseover.js"></script>
    <style>
        .NoBorder {
            border:none;
        }
    </style>
</head>
<body>
<h3>Thank you so much for taking the time out
    of your day to complete our short survey.</h3>
<img src="../assets/images/thankyou1.png" alt="Thanks for filling out our form"
     title="Thanks for filling out our form" />

<p><a href="https://people.rit.edu/~ak5297/iste240/project1/feedback.php">
        <img class="NoBorder" width="50" src="../assets/images/home_blue.png"
             id="homeJRH" alt="Home"    title="Home"
             onmouseover="change('homeJRH','../assets/images/home_red.png')"
             onmouseout ="change('homeJRH','../assets/images/home_blue.png')" /></a></p>
</body>
</html>