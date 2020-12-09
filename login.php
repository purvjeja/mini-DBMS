<?php  
	$host = "localhost";
	$dbusername = "root";
	$dbpassword = "";
	$dbname = "DBMS";
	$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);
	$query = "SELECT DISTINCT * FROM `seasoncreated`";
	$result1 = mysqli_query($conn, $query);		
?>  
<!doctype html>
<html>
	
<meta charset="utf-8">
	<link href="css/logincss.css" media="all"  rel="stylesheet" type="text/css"/>
	<head>
<title>IPL Login</title>
<body>
	<div class="header">
		<img src="css/user.png" class="logo" width="100px">
		<h2>Indian Premier League</h2>
			<form method="POST" action="ViewSeason.php">
			<br><input type="text" placeholder="Enter your Name" name="name" required ><br>		
			<center>
				<select name="season"  required>
				<option value="">Select Season</option>
				<?php while($row1 = mysqli_fetch_array($result1)):;?>
				<option value="<?php echo $row1[1];?>"><?php echo $row1[1];?></option>
                <?php endwhile;?>
			    </select>&nbsp;&nbsp;&nbsp;</center><br>
				<input type="Submit" value="Login"><br>
			  </form> 
		<center>
			<br>		
			<h3>OR</h3>
		<a href="userlogin.php">Create New Season</a>
	    </center>
	</div>
 	
	<p>&nbsp;</p><br>
<p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>
	<div class="footer">
		<center>
		<h3>SPONSORS : </h3>
		<marquee direction="right" scrollamount="20"><img src="css/footer.png" class="fotr" width="35%" ></marquee> </center>
	</div>
</body>
</head>
</html>

