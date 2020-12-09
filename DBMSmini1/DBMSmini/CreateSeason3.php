<?php 
$sea = $_GET['value'];
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
	<link href="css/CreateSeasoncss.css" rel="stylesheet" type="text/css">
<title>Create Season</title>
</head>

<body><center><br>
	<h1>Admin access</h1>
        <p>&nbsp;</p>
		<br><br><img src="css/ipl.png" class="ipllogo" width="100px">
		<br><br>
		<br><br>
		<div class="header">
	   <button onclick="window.location.href = '/DBMSmini/CreatePointtable.php?value=<?php print($sea); ?>';">POINT TABLE</button>
	</div>		
	<p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>  
	
	
	<div class="footer">
		<center>
		Copyright © 2019  |  IPL, BCCI 2019. All Rights Reserved.
		<img src="css/footer.png" class="fotr" width="30%"></center>
	</div>
</center></body>
</html>
