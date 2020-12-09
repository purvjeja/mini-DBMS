<?php
    $sea=$_GET['value'];  
	$host = "localhost";
	$dbusername = "root";
	$dbpassword = "";
	$dbname = "DBMS";
	$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);
	$sql="INSERT INTO seasoncreated(seasoncreated) VALUES('$sea')";
	if ($conn->query($sql)){ 
	}
	   else{
	   echo "Error: ". $sql ." ". $conn->error;
       }  
    $query = "SELECT DISTINCT * FROM `seasoncreated`";
	$result1 = mysqli_query($conn, $query);
?>      
<!doctype html>
<html>
<head>	
<meta charset="utf-8">
	<link href="css/logincss.css" rel="stylesheet" type="text/css">
<title>IPL Login</title>
</head>

<body>
	<div class="header">
		<img src="css/user.png" class="logo" width="100px">
		<h1>Indian Premier League<ab></ab></h1>
			<form method="POST" action="ViewSeason.php">
			<br><input required type="text" placeholder="Enter your Name" name="name"><br>		
			<center>
				<select required name="season" >
				<option value="">Select Season</option>
				<?php while($row1 = mysqli_fetch_array($result1)):;?>
				<option value="<?php echo $row1[1];?>"><?php echo $row1[1];?></option>
                <?php endwhile;?>
			    </select>&nbsp;&nbsp;&nbsp;</center><br>
				<input type="Submit" value="Login"><br>
			  </form> 
		<center>
			<br>
			<h1>OR</h1>
			<br>
		<a href="CreateSeason1.php">Create New Season</a>
	    </center>
	</div>
 	
	<p>&nbsp;</p>
<p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>
	<div class="footer">
		<center>
		Copyright © 2019  |  IPL, BCCI 2019. All Rights Reserved.
		<img src="css/footer.png" class="fotr" width="30%"> </center>
	</div>
</body>
</html>