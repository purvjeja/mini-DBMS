<?php 
$sea = $_GET['value'];
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "DBMS";
$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);
  $result = mysqli_query($conn,"SELECT * from pointtable where season = $sea ");
  $num=mysqli_num_rows($result);
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
	<link href="css/View2PT.css" rel="stylesheet" type="text/css">
<title>View PointsTable</title>
</head>
<body><br>
<center>
     <h1><u>Points Table</u></h1><br>
		<h2>Indian Premier League standings</h2>
		<h3>60 T20s</h3>
</center>
<table align="center" width="500" border="0" cellspacing="0" cellpadding="10">
  <tbody>
    <tr bgcolor="#2A2A2A">
      <th scope="col"><thd>Position</thd></th>
      <th scope="col"><thd>Team Name</thd></th>
      <th scope="col"><thd>Points</thd></th>
    </tr>
    <?php     
    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
    {
    ?>
    <tr bgcolor="#EBEBEB">
	    <td><?php echo $row['position'] ?></td>
      <td><?php echo $row['teamname'] ?></td>
      <td><?php echo $row['points'] ?></td>
    </tr>
    <?php } ?>
  </tbody>
</table>
	<p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>
	<center>
  <button onclick="window.location.href = '/DBMSmini/ViewSeason1.php?value=<?php print($sea); ?>';">BACK</button>
	</center><br>
	<p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>
	<div class="footer">
		<center>
		Copyright © 2019  |  IPL, BCCI 2019. All Rights Reserved.
		<img src="css/footer.png" class="fotr" width="30%"></center>
	</div>
</body>
</html>
