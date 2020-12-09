<?php 

	$sea=$_POST['season'];
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
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
		<h2>Click on fixture button to Create Fixtures </h2>
        <p>&nbsp;</p>
    <div class="header">
		<img src="css/ipl.png" class="ipllogo" width="100px">
		<br><br>
	   <button onclick="window.location.href = '/DBMSmini/Create2Fixtures.php?value=<?php print($sea); ?>';" value="FIXTURES">FIXTURES	</button> 
	</div>		
	<?php 
	} else {
	 echo "The Season Year you entered is already created,Tap this Button to know the information of ".$sea." Season" ;
	 ?>
	<button onclick="window.location.href = '/DBMSmini/ViewSeason1.php?value=<?php print($sea); ?>';">INFO OF <?php print($sea); ?></button> 
	<input type="Submit" button onclick="window.location.href = '/DBMSmini/login.php';" value="BACK TO LOGIN"></button>
	<?php } ?>
	<p>&nbsp;</p>
    <p>&nbsp;</p><p>&nbsp;</p>
    <img src="css/IPL1.png" class="ipllogo" width="600px">
    <p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><br>
	<div class="footer">
		<center>
		<img src="css/footer.png" class="fotr" width="30%"></center>
	</div>
</center></body>
</html>
<style>
/* CSS Document */

body{
	margin:0px;
	padding:0px; 
	background: url("css/bckgd1.jpg");
	background-size: cover;
}

.header input[type="Submit"]{
	width: 100%;
	height: 40px;
	background-color: #70923e;
	outline: none;
	border: none;
	color:white;
	font-size: 25px;
	border-radius:10px;
}
.header input[type="Submit"]:hover{
	background-color:#9f7992;
	color: aquamarine
}

h1{
	color: white;
	font-family: century gothic;
	margin:0px; 
}

ab input[type="Submit"]{
	height: 30px;
	background-color: #9f7992;
	outline: none;
	color:white;
	font-size: 25px;
}
.footer{
	padding: 10px 100px;
	padding: 10px 100px;
	opacity: .7;
}
</style>