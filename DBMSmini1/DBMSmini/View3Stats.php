<?php 
$sea = $_GET['value'];
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "DBMS";
$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);
  $result = mysqli_query($conn,"SELECT * from stats where season=$sea");
  $num=mysqli_num_rows($result);
  $row=mysqli_fetch_array($result, MYSQLI_ASSOC); 
  $sql = "DELETE FROM stats WHERE runs=\"\""; 
?>
<!doctype html>

<html>
<head>
<meta charset="utf-8">
	<link href="css/View3Stats.css" rel="stylesheet" type="text/css">
<title>View Stats</title>
</head>

<body><br>
<center><h1><u>STATS</u></h1><br>
	<h4>IPL complete stats of highest run scorer, leading wicket-takers, most catches, stumpings, most 6's and 4's.</h4>
	<br><br><br><br><br>
<table width="500" border="0" cellspacing="0" cellpadding="10">
  <tbody>
    <tr bgcolor="#397135">
      <th scope="row"><thd>Total Runs :</thd></th>
      <td><b><?php echo $row['runs']?></b></td>
    </tr>
    <tr bgcolor="#397125">
      <th scope="row"><thd>Total Wickets :</thd></th>
      <td><b><?php echo $row['wicket']?></b></td>
    </tr>
	<tr bgcolor="#397135">
      <th scope="row"><thd>Total Century :</thd></th>
      <td><b><?php echo $row['century']?></b></td>
    </tr>
	<tr bgcolor="#397125">
      <th scope="row"><thd>Total Half-Century :</thd></th>
      <td><b><?php echo $row['halfcentury']?></b></td>
    </tr>
	<tr bgcolor="#397135">
      <th scope="row"><thd>Total Boundaries :</thd></th>
      <td><b><?php echo $row['boundaries']?></b></td>
    </tr>
  </tbody>
</table></center>

	<p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>
	<center>
  <button onclick="window.location.href = '/DBMSmini/ViewSeason1.php?value=<?php print($sea); ?>';">BACK</button>

	<br>
	<p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>
	<h3>IPL on the go ... Filter by Statistic ..... IPL Code of Conduct for Match officials · Brand and Protection Guidelines · Governing Council · IPL Committees ·</h3>
	</center>
	<div class="footer">
		<center>
		Copyright © 2019  |  IPL, BCCI 2019. All Rights Reserved.
		<img src="css/footer.png" class="fotr" width="30%"></center>
	</div>
</body>
</html>
