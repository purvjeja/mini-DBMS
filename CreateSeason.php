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
    <br></br><br></br>
	<p>&nbsp;</p>
    <div class="header">
		<br><img src="css/ipl.png" class="ipllogo" width="100px"><br>
	   <input type="submit" button onclick="window.location.href = '/DBMSmini/Create3Stats.php?value=<?php print($sea); ?>';" value="STATS"></button>
	</div>
	<p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;
	<p>&nbsp;</p>
	<ab><a href="login.php"><input type="Submit" value="Back"></a></ab>
	<p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>			
	<div class="footer">
		<center>
		Copyright © 2019  |  IPL, BCCI 2019. All Rights Reserved.
		<img src="css/footer.png" class="fotr" width="30%"></center>
	</div>
</center></body>
</html>	
<?php 
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "dbms";
$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);
if (mysqli_connect_error()){		
    die('Connect Error ('. mysqli_connect_errno() .') '
    . mysqli_connect_error());
}
else{ 		 	
$for="INSERT INTO teams(teamname,season) SELECT DISTINCT(teamname),season from fortrigger where season= $sea;";
if($conn->query($for)){ 
}
   else{
   echo "Error: ". $for ." ". $conn->error;
   } 
$truncatetemp="TRUNCATE TABLE fortrigger";
if($conn->query($truncatetemp)){ 
}
   else{
   echo "Error: ". $truncatetemp ." ". $conn->error;
} 
$conn->close();
} 
?>