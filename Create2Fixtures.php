<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);
$sea = $_GET['value'];
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
	<link href="css/Create2Fixtures.css" rel="stylesheet" type="text/css">
<title>New Fixture</title>
</head>
<body><br><br>
<center><h1><u>CREATE FIXTURES</u></h1><br><br>
	<h4>Find all the fixtures and results, schedules of all matches of Indian Premier League.</h4></center>
    <form action="" method="POST">
 <table align="center" width="500" border="0" cellspacing="0" cellpadding="10">
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
   <tr>   
    <th><input type="text" name="match" required></th>
    <th><input type="text" name="team1" required></th>
    <th><input type="text" name="team2" required></th>
    <th><input type="text" name="venue" required></th>
    <th><input type="date" name="date"  required></th>
    <th><input type="text" name="teamwon" required></th>
    <th><input type="number" name="point" required></th>
    </tr>     
  </tbody>
</table>
<?php

$match = filter_input(INPUT_POST, 'match');
$team1 = filter_input(INPUT_POST, 'team1');
$team2 = filter_input(INPUT_POST, 'team2');
$venue = filter_input(INPUT_POST, 'venue');
$date = filter_input(INPUT_POST, 'date');
$teamwon = filter_input(INPUT_POST, 'teamwon');
$point = filter_input(INPUT_POST, 'point');
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
$sql = "INSERT INTO fixtures(season,matchno,team1,team2,venue,date,matchresult,points) values ('$sea','$match','$team1','$team2','$venue','$date','$teamwon','$point')";
if ($conn->query($sql)){ 
 }
    else{
    echo "Error: ". $sql ." ". $conn->error;
    }  
    $sqll = "DELETE FROM fixtures WHERE matchno=\"\"";        
if($conn->query($sqll)){ 
}
   else{
   echo "Error: ". $sqll ." ". $conn->error;
   }  
    $conn->close();
} 

?><p>&nbsp;</p>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="Submit" value="UPDATE">
        </form>  
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <button onclick="window.location.href = '/DBMSmini/CreateSeason.php?value=<?php print($sea); ?>';">NEXT</button>
      <center><h3 color:white><u>Note:</u> For every row updation click on update!</h3></center>  
      <p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>

  <div class="footer">
		<center>
		<img src="css/footer.png" class="fotr" width="30%"></center>
	</div>
</body>
</html>
