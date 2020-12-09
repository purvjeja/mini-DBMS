<?php 
$sea = $_GET['value'];
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "DBMS";
$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);
  $result = mysqli_query($conn,"SELECT * from teams where season = $sea ");
  $num=mysqli_num_rows($result);
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
	<link href="css/View4Teams.css" rel="stylesheet" type="text/css">
<title>View Teams</title>
</head>

<body><br>
<center><h1><u>IPL TEAMS</u></h1><br>
	<h4>The Indian Premier League (IPL) is a professional Twenty20 cricket league in India contested during March or April and May of every year by eight teams representing eight different cities in India. The league was founded by the Board of Control for Cricket in India (BCCI) in 2008. IPL has an exclusive window in ICC Future Tours Programme.</h4></center>
<table align="center" width="500" border="0" cellspacing="0" cellpadding="10">
  <tbody>
    <tr bgcolor="#2A2A2A">
      <th scope="col"><thd>Team Name</thd></th>
    </tr>
    <?php
    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
    {
    ?>
    <tr>
    <tr bgcolor="#EBEBEB">
    <td> <?php echo $row['teamname']?> </td> 
    <?php } ?>
   </tr> 
  </tbody>
</table>
	<p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>
	<center>
  <button onclick="window.location.href = '/DBMSmini/ViewSeason1.php?value=<?php print($sea); ?>';">BACK</button>
		</a></ab><p>&nbsp;</p><p>&nbsp;</p>
		<h3 color:white>IPL on the go ... Filter by Statistic ..... IPL Code of Conduct for Match officials · Brand and Protection Guidelines · Governing Council · IPL Committees ·</h3>
	</center><br>
	
	<div class="footer">
		<center>
		Copyright © 2019  |  IPL, BCCI 2019. All Rights Reserved.
		<img src="css/footer.png" class="fotr" width="30%"></center>
	</div>
</body>
</html>
