<!DOCTYPE HTML>
<html lang="en-US">
	<title>HTML5 localStorage Example</title>
	<meta charset="UTF-8">
	<meta name="description" content="local storage">
	<meta name="keywords" content="HTML,CSS">
	<meta name="author" content="Kelly Johnson">
	<script src="Storage.js"></script>
	<link rel="stylesheet" href="/cit-261/Portfolio/localStorage/StorageStyle.css">
  <head>
    <title>The jQuery Example</title>
    <script type = "text/javascript" 
       src = "http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	
    <script type = "text/javascript" language = "javascript">
       $(document).ready(function() {
          $("#driver").click(function(event){
             var name = $("#name").val();
             localStorage.name = "#name"; // how can I get the name to be stored in local storage?
             $("#stage").load('/cit-261/Portfolio/ajax/showWelcomName.php', {"name":name} );
          });
       });
    </script>
 </head>
	
  <body onload="doShowAll()" id="center">
		    <p>Enter your name and click on the button:</p>
    <input type = "input" id = "name" size = "40" placeholder="Tom Marvolo Riddle"/><br />
	
    <div id = "stage">
       
    </div>
	
    <input type = "button" id = "driver" value = "Show Result" />
    	
    
     </body>
	
</html>