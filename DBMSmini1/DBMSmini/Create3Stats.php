<?php
$sea = $_GET['value'];
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
	<link href="css/Create3Stats.css" rel="stylesheet" type="text/css">
<title>New Stats</title>
</head>

<body><br>
<center><h1><u>CREATE STATS</u></h1><br>
	<h4>IPL complete stats of highest run scorer, leading wicket-takers, most catches, stumpings, most 6's and 4's.</h4>
	<br><br><br><br><br>
<form action=" " method="POST">
<table width="500" border="0" cellspacing="0" cellpadding="10">
  <tbody>
    <tr bgcolor="#397135">
      <th scope="row"><thd>Total Runs :</thd></th>
      <td><input type="number" name="totalruns"required ></td>
    </tr>
    <tr bgcolor="#397125">
      <th scope="row"><thd>Total Wickets :</thd></th>
      <td><input type="number" name="totalwickets" required></td>
    </tr>
	<tr bgcolor="#397135">
      <th scope="row"><thd>Total Century :</thd></th>
      <td><input type="number" name="century" required></td>
    </tr>
	<tr bgcolor="#397125">
      <th scope="row"><thd>Total Half-Century :</thd></th>
      <td><input type="number" name="halfcentury" required></td>
    </tr>
	<tr bgcolor="#397135">
      <th scope="row"><thd>Total Boundaries :</thd></th>
      <td><input type="number" name="boundaries" required></td>
    </tr>
  </tbody>
</table></center>

	<p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>
	<center>
		<ab><input type="Submit" value="UPDATE"></ab>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       </form>
       <button onclick="window.location.href = '/DBMSmini/CreateSeason3.php?value=<?php print($sea); ?>';">NEXT</button>
    <h3 color:white><u>Note:</u> For every updation click on update!</h3>
	</center><br>
	<p>&nbsp;</p><p>&nbsp;</p>
	<div class="footer">
		<center>
		Copyright © 2019  |  IPL, BCCI 2019. All Rights Reserved.
		<img src="css/footer.png" class="fotr" width="30%"></center>
	</div>
</body>
</html>
<?php
$totalwickets = filter_input(INPUT_POST, 'totalwickets');
$totalruns = filter_input(INPUT_POST, 'totalruns');
$century = filter_input(INPUT_POST, 'century');
$halfcentury = filter_input(INPUT_POST, 'halfcentury');
$boundaries = filter_input(INPUT_POST, 'boundaries');
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
$sql = "INSERT INTO stats(season,runs,wicket,century,halfcentury,boundaries) values ('$sea','$totalruns','$totalwickets','$century','$halfcentury','$boundaries')";
if ($conn->query($sql)){ 
 }
    else{
    echo "Error: ". $sql ." ". $conn->error;
    }  
$sqll = "DELETE FROM stats WHERE runs=\"\"";        
if($conn->query($sqll)){ 
}
   else{
   echo "Error: ". $sqll ." ". $conn->error;
   }  
   $conn->close();
}
?>