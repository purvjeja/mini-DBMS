<?php 
$sea = $_GET['value'];
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "DBMS";
$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);
$result = mysqli_query($conn,"SELECT * from fixtures where season = $sea ");
  $num=mysqli_num_rows($result);
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
	<link href="css/View1Fixtures.css" rel="stylesheet" type="text/css">
<title>View Fixtures</title>
</head>

<body><br>
<center><h1><u>FIXTURES</u></h1><br>
	<h4>Provides IPL T20 match schedule. ... Note: The VIVO IPL schedule is subject to change. IST: Indian Standard Time, GMT: Greenwich Mean Time.</h4></center>
<table align="center" width="1000" border="10" cellspacing="10" cellpadding="10">
  <tbody>
    <tr bgcolor="#2A2A2A">
    <th scope="col"><thd>Match No.</thd></th>
      <th scope="col"><thd>Team A</thd></th>
      <th scope="col"><thd>Team B</thd></th>
      <th scope="col"><thd>Venue</thd></th>
      <th scope="col"><thd>date</thd></th>
      <th scope="col"><thd>Team Won</thd></th>
      <th scope="col"><thd>Points given</thd></th>
    </tr>
    <?php
    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
    {
    ?>
    <tr bgcolor="#EBEBEB">
       <td> <?php echo $row['matchno']?> </td>
       <td> <?php echo $row['team1']?> </td>
       <td> <?php echo $row['team2']?> </td>
       <td> <?php echo $row['venue']?> </td>
       <td> <?php echo $row['date']?> </td>
       <td> <?php echo $row['matchresult']?> </td>
       <td> <?php echo $row['points']?> </td>
    </tr>
    <?php } ?>
  </tbody>
</table>
	<p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>
	<center>
  <button onclick="window.location.href = '/DBMSmini/ViewSeason1.php?value=<?php print($sea); ?>';">BACK</button>

	</center><br>
	<p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>
	<div class="footer">
		<center>
		Copyright © 2019  |  IPL, BCCI 2019. All Rights Reserved.
		<img src="css/footer.png" class="fotr" width="30%"></center>
	</div>
</body>
</html>
