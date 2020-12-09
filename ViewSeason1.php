<?php
$sea = $_GET['value'];
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "DBMS";
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
$conn->close();

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
	<link href="css/ViewSeasoncss.css" rel="stylesheet" type="text/css">
<title>View Season</title>
</head>

<body><center><br>
	<p>&nbsp;</p>
	<h2>Season Year:&nbsp;<?php print($sea);?></h2>
	<img src="css/ipl.png" class="ipllogo" width="100px">
	<div class="header">
	<input type="submit" onclick="window.location.href = '/DBMSmini/View1Fixtures.php?value=<?php print($sea); ?>';" value="FIXTURES"></button>
	<br><br>
	<input type="submit" onclick="window.location.href = '/DBMSmini/View3Stats.php?value=<?php print($sea); ?>';" value="STATS"></button>
	<br><br>
	<input type="submit" onclick="window.location.href = '/DBMSmini/View4Teams.php?value=<?php print($sea); ?>';" value="TEAMS"></button>
	<br><br>
	<input type="submit" onclick="window.location.href = '/DBMSmini/View2PT.php?value=<?php print($sea); ?>';" value="POINT TABLE"></button>
	</div>
	<p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>
<button onclick="window.location.href = '/DBMSmini/login.php';">BACK</button>

	<p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>
	<div class="footer">
		<center>
		<img src="css/footer.png" class="fotr" width=30%></center>
	</div>
</center></body>
</html>

