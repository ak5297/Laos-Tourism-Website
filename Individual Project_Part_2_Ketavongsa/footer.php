<footer>		 
       &copy; Copyright 2019 Alex Ketavongsa
    
<?php
if(file_exists($filename)) {
echo "Last modified: ".date("F d Y h:iA.",filemtime($filename));
}
?>

</footer>
</html>