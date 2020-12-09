<?php $sea=$_GET['value'];  
?>  
<!doctype html>
<html>
<head>
<meta charset="utf-8">
	<link href="css/Create2Fixtures.css" rel="stylesheet" type="text/css">
<title>New Fixture</title>
</head>

<body><br>
<center><h1><u>CREATE FIXTURES</u></h1><br>
    <h4>Find all the fixtures and results, schedules of all matches of Indian Premier League.</h4></center>
    <form action="" method="post">
<table align="center" width="500" border="0" cellspacing="0" cellpadding="10">
  <tbody>
    <tr bgcolor="#2A2A2A">
      <th scope="col"><thd>Position</thd></th> 
      <th scope="col"><thd>Teamname</thd></th>
      <th scope="col"><thd>Team Points</thd></th>
    </tr>  
    <tr>
    <th><input type="number" name="position" required></th>
    <th><input type="text" name="teamname" required></th>   
    <th><input type="number" name="points" required></th>
    </tr>     
  </tbody>
</table>
<?php
$position = filter_input(INPUT_POST, 'position');
$teamname = filter_input(INPUT_POST, 'teamname');
$points = filter_input(INPUT_POST, 'points');
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
$sql = "INSERT INTO  pointtable(season,position,teamname,points) values ('$sea','$position','$teamname','$points')";
if ($conn->query($sql)){ 
 }
    else{
    echo "Error: ". $sql ." ". $conn->error;
    }  
    $sqll = "DELETE FROM pointtable WHERE teamname=\"\"";        
if($conn->query($sqll)){ 
}
   else{
   echo "Error: ". $sqll ." ". $conn->error;
   }  
?>
	<p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>&nbsp;&nbsp;&nbsp;&nbsp;
	<center>
        <input type="Submit" value="UPDATE">
        </form>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        
		<h3 color:white><u>Note:</u> For every row updation click on update!</h3>
	</center><br>
  <center>
  <button onclick="myFunction()">Create Season</button>
  </center>
  <p id="demo"></p>
  <script>
function myFunction() { 
  if (confirm("Click 'OK' to create database for season <?php print($sea); ?> !!")) {
    window.location.href = '/DBMSmini/login1.php?value=<?php print($sea); ?>';
    }
 }
</script>
  <p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><br>   
	<div class="footer">
		<center>
		<img src="css/footer.png" class="fotr" width="30%"></center>
	</div>
</body>
</html>
<?php
$conn->close();
} 
?>