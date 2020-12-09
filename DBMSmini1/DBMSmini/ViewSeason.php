<?php
$name = $_POST['name'];
$sea = filter_input(INPUT_POST, 'season');
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "DBMS";
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
if (mysqli_connect_error()){
    die('Connect Error ('. mysqli_connect_errno() .') '
    . mysqli_connect_error());
}
else{
$sql = "INSERT INTO userlogin(name,season) values ('$name','$sea')";
if ($conn->query($sql)){
	
    }
    else{
    echo "Error: ". $sql ." ". $conn->error;
    } 
$conn->close();
}  
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
	<link href="css/ViewSeasoncss.css" rel="stylesheet" type="text/css">
<title>View Season</title>
</head>

<body><center><br>
	<h1>Welcome,&nbsp;<?php print($name);?></h1>
	<p>&nbsp;</p>
	<h2>Season Year:&nbsp;<?php print($sea);?></h2>
	<br><img src="css/ipl.png" class="ipllogo" width="100px">
	<div class="header">
	<button onclick="window.location.href = '/DBMSmini/View1Fixtures.php?value=<?php print($sea); ?>';">FIXTUREs</button>
	<br>
	<button onclick="window.location.href = '/DBMSmini/View3Stats.php?value=<?php print($sea); ?>';">STATS</button>
	<br>
	<button onclick="window.location.href = '/DBMSmini/View4Teams.php?value=<?php print($sea); ?>';">TEAMS</button>
	<br>
	<button onclick="window.location.href = '/DBMSmini/View2PT.php?value=<?php print($sea); ?>';">POINT TABLE</button>
	</div>
	<p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>
	<ab><button onclick="goBack()"><=BACK</button></ab>
	<script>
            function goBack() {
              window.history.back();
            }
            </script>
	<p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>
	<div class="footer">
		<center>
		Copyright © 2019  |  IPL, BCCI 2019. All Rights Reserved.
		<img src="css/footer.png" class="fotr" width=30%></center>
	</div>
</center></body>
</html>

