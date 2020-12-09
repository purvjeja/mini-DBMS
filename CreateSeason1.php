<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
	<link href="css/CreateSeasoncss.css" rel="stylesheet" type="text/css">
<title>Create Season</title>
</head>
<body><center><br>
	<h1>Admin access</h1><br><br>
	<form action="CreateSeason2.php" method="POST"> 
	Enter the season Year <input type="number" name="season" required >
	<input type="Submit" value="GO">
        <p>&nbsp;</p>
      <video width="400" height="400" autoplay loop>
      <source src="ipllogo.mp4" type="video/mp4" >
	    Your browser does not support the video tag.
    </video>
     </form>
	<p>&nbsp;</p>
	<div class="footer">
		<center>
		<img src="css/footer.png" class="fotr" width="30%"></center>
	</div>
</center></body>
</html>
<style>
video{
border-radius:1000px;
opacity : 0.8;
}
</style>