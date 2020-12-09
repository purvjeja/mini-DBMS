<?php 

	$sea=$_POST['season'];
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
	<link href="css/CreateSeasoncss.css" rel="stylesheet" type="text/css">
<title>Create FIXTURE</title>
</head>

<body><center><br>
	
	<h2>Season : <?php print($sea); ?></h2>
	<?php 
	$host = "localhost";
	$dbusername = "root";
	$dbpassword = "";
	$dbname = "DBMS";
	$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);
		$result = mysqli_query($conn,"SELECT seasoncreated FROM seasoncreated WHERE seasoncreated = '$sea'");
		if(!$result || mysqli_num_rows($result) == 0) {
		?>
		<h1>Click on fixture button to Create Fixtures </h1>
        <p>&nbsp;</p>
		<br><br><img src="css/ipl.png" class="ipllogo" width="100px">
		<br><br>
		<br><br>
		<div class="header">
	   <button onclick="window.location.href = '/DBMSmini/Create2Fixtures.php?value=<?php print($sea); ?>';">FIXTUREs</button> 
	</div>		
	<p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>
	<?php 
	} else {
	 echo "The Season Year you entered is already created,Tap this Button to know the information of ".$sea." Season" ;
	 ?>
	<button onclick="window.location.href = '/DBMSmini/ViewSeason1.php?value=<?php print($sea); ?>';">INFO OF <?php print($sea); ?></button> 
	<?php } ?>
	<p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>
	<div class="footer">
		<center>
		Copyright © 2019  |  IPL, BCCI 2019. All Rights Reserved.
		<img src="css/footer.png" class="fotr" width="30%"></center>
	</div>
</center></body>
</html>
