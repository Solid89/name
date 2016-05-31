
<h1><?php
if( $_REQUEST["name"] ) {

   $name = $_REQUEST['name'];
   echo "Welcome ". $name." ";
}

?> Please click the new button to see the  local storage example using a default names</h1>
<script>
	localStorage.name = ""
	localStorage.username = "George";
	localStorage.country = "USA";
	localStorage.color = "pink";
</script>
<a href="defaultNames.php">Default Names</a>
 
