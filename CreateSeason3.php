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
    <div class="header">
		<img src="css/ipl.png" class="ipllogo" width="100px"><br><br>
	   <input type="submit" button onclick="window.location.href = '/DBMSmini/CreatePointtable.php?value=<?php print($sea); ?>';" value="POINT TABLE"></button>
	</div>		
	<p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p> <p>&nbsp;</p> <p>&nbsp;</p> <p>&nbsp;</p> <p>&nbsp;</p><p>&nbsp;</p> <p>&nbsp;</p> <p>&nbsp;</p> <p>&nbsp;</p> <p>&nbsp;</p> <p>&nbsp;</p> <p>&nbsp;</p>   
	
	
	<div class="footer">
		<center>
		<img src="css/footer.png" class="fotr" width="30%"></center>
	</div>
</center></body>
</html>
