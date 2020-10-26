/* Alex Ketavongsa
ISTE 240 - Individual Project Javascript
*/

"use strict";

//Initialize the variables for the homepage slideshow
var imageArray = ["assets/images/laos1.jpg", "assets/images/laos3.png", "assets/images/laos4.jpg", "assets/images/laos2.jpg", "assets/images/laos5.jpg"];

var arraySize = imageArray.length;

setInterval(runit, 2000);

var x = 1;

//Run the slideshow function
function runit() {
	document.getElementById('slideshow').src = imageArray[x];
	x++
    
	if(x === arraySize) {
		x = 0;
	}
  }
  
  /* Nav bar */
  function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
//start the validation script (taken from example)
function validateForm() {
var isvalid = true;
var isFocused = true;

if (document.getElementById("name").value == "") {
	document.getElementById("error-name").innerHTML="Error:You must enter a name."; 
	document.getElementById("error-name").style.backgroundColor = 'pink';
	document.getElementById("name").style.borderColor = "red";
	document.getElementById("name").style.backgroundColor = 'pink';
    document.getElementById("name").focus();
    event.preventDefault();
    isFocused = false;
	isvalid = false;
} else {
	document.getElementById("name").style = null;
	document.getElementById("error-name").innerHTML= "";
    isvalid = true;
}
        
var validate = checkDate();
var validateButton = checkIfRadioButtonSelected();
var validateText = validateComment();
console.log("checking date " + validate );
console.log("checking radio" + validateButton);
console.log("checking name" + isvalid);
console.log("checking comment" + isvalid1);
return (isvalid && validate && validateButton && isvalid1);
}// end of function to validate name on Form

function validateComment() {
var isvalid1 = true;
var isFocused1 = true;
  
if (document.getElementById("comment").value == "") {
	document.getElementById("error-").innerHTML="Error:You must enter a comment."; 
	document.getElementById("error-comment").style.backgroundColor = 'pink';
	document.getElementById("comment").style.borderColor = "red";
	document.getElementById("comment").style.backgroundColor = 'pink';
    document.getElementById("comment").focus();
    event.preventDefault();
    isFocused1 = false;
	isvalid1 = false;
} else {
	document.getElementById("comment").style = null;
	document.getElementById("error-comment").innerHTML= "";
    isvalid1 = true;
 }
 
console.log("checking comment" + isvalid1);
return isvalid1;    
}

//function to validate visitor's date to current date 
function checkDate(){
    var dateValid=true;
    var vdate = document.getElementById("visitdate").value;
    var today = new Date();   
    console.log("Users date  = " + vdate);
    var dd = today.getDate();
    var mm = today.getMonth()+1;
    var yyyy = today.getFullYear();
    
    if (dd < 10) {
     dd = '0' + dd;
    }  // need this in case day number is one digit like 6
    if (mm < 10) {
     mm = '0' + mm;
    }  // need this is month number is 1 digit like 4 
    
    var td = "" + yyyy + "-" + mm + "-" + dd;
    console.log("System date = " + td);
    
    if(vdate >= td){
       document.getElementById("error-visit").innerHTML="  Error:You cannot select today or the days after.  "; 
       document.getElementById("visitdate").style.borderColor="red";
       document.getElementById("error-visit").style.backgroundColor = 'pink';
       dateValid = false;
       }
    else  {
       document.getElementById("error-visit").innerHTML= ""; 
       document.getElementById("visitdate").style.border = null;
       document.getElementById("visitdate").style = null;
       dateValid = true;
       }// end of else path
       console.log("in check date " + dateValid);
    return (dateValid);
}//end of function validate visitor's date to present date

//Start of check radio button function
function checkIfRadioButtonSelected(){
    var isChecked = true;
    var isFocused = true;

	var len = document.getElementsByName("learn").length;
	var choices = new Array();
	for (var i=0; i<len; i++) 
	{
		if (document.getElementsByName("learn")[i].checked)
		{	
			choices.push(document.getElementsByName("learn")[i].value);
		}	
		
	}//end of for loop

    if (choices.length > 0){
        document.getElementsByTagName("fieldset")[0].style = null;
        document.getElementsByTagName("legend")[0].style = null;
    	document.getElementById("error").innerHTML= ""; 
    	document.getElementById("error").style = null;
    	isChecked = true;
        isFocused = true;
    }
    else{
        document.getElementById("error").innerHTML="  Error:You must select an option. "; 
       // document.getElementById("error-learn").style.backgroundColor = 'pink';
        document.getElementsByTagName("fieldset")[0].style.borderColor = 'red';
        document.getElementsByTagName("legend")[0].style.color = 'red';
        document.getElementById("error").style.backgroundColor = 'pink';
        document.getElementById("learn-yes").focus();
        event.preventDefault();
        isFocused = false;
        isChecked = false;
    }
    console.log("in check radio " + isChecked);
    return isChecked;
    
}//end of function checkIfRadioButtonSelected
