<center>
<form action="" method="post">
Get an mail containing information of this season : <input type="email" name="mail" required> <input type="submit" value="GO">
</form>
</center>
<?php
$sea=$_GET['value'];  
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "DBMS";
$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);
$result1 = mysqli_query($conn,"SELECT * from fixtures where season = $sea");
$result2 = mysqli_query($conn,"SELECT * from pointtable where season =$sea ");
$result3= mysqli_query($conn,"SELECT * from stats where season=$sea");
$result4 = mysqli_query($conn,"SELECT * from teams where season =$sea");
$output = '<html><body><form>
<br></br>
<center>
         <h1><u>IPL TEAMS</u></h1><br> </center>';
$output .='<table align="center" width="500" border="0" cellspacing="0" cellpadding="10">';
$output .=' <tbody>';
$output .= '<tr bgcolor="#d16d6d">';
$output .= '<th scope="col"><thd>Team Name</thd></th>';
$output .=' </tr>';
while($row = mysqli_fetch_array($result4, MYSQLI_ASSOC))
    {
        $output .='<tr>';
        $output .= '<tr bgcolor="#EBEBEB"><td>';
        $output .= $row['teamname'].'</td> ';
     }
     $output .=' </tr> 
  </tbody>
</table>
<br></br>
<center>
<h1><u>IPL STATS</u></h1><br></center>
<table align="center" width="500" border="0" cellspacing="0" cellpadding="10">
  <tbody>
    <tr bgcolor="#397135">
      <th scope="row"><thd>Total Runs :</thd></th>';
      $row1=mysqli_fetch_array($result3, MYSQLI_ASSOC); 

      $output .=' <td><b>'.$row1['runs'].'</b></td>';
      $output .=' </tr>
    <tr bgcolor="#397125">
      <th scope="row"><thd>Total Wickets :</thd></th>';
      $output .=  '<td><b>' .$row1['wicket'] .'</b></td>';
      $output .='</tr>
	<tr bgcolor="#397135">
      <th scope="row"><thd>Total Century :</thd></th>';
      $output .= '<td><b>'.$row1['century'].'</b></td>';
      $output .= '</tr>
	<tr bgcolor="#397125">
      <th scope="row"><thd>Total Half-Century :</thd></th>';
      $output .=  '<td><b>'.$row1['halfcentury'].'</b></td>';
      $output .= '</tr>
	<tr bgcolor="#397135">
      <th scope="row"><thd>Total Boundaries :</thd></th>';
      $output .= '<td><b>'. $row1['boundaries'].'</b></td>';
      $output .='</tr>
  </tbody>
</table>
<br></br>
<center>
  <h1><u>IPL POINT TABLE</u></h1><br></center>
<table align="center" width="500" border="0" cellspacing="0" cellpadding="10">
  <tbody>
  
    <tr bgcolor="#EBEBEB">
      <th scope="col"><thd>Position</thd></th>
      <th scope="col"><thd>Team Name</thd></th>
      <th scope="col"><thd>Points</thd></th>
    </tr>';    
    while($row = mysqli_fetch_array($result2, MYSQLI_ASSOC))
    {
        $output .='<tr bgcolor="#EBEBEB">
	    <td>'. $row['position'] .'</td>
      <td>'. $row['teamname'] .'</td>
      <td>'. $row['points'] .'</td>
    </tr>';
   } 
   $output .='</tbody>
</table>
<br></br>
<center>
<h1><u>IPL FIXTURES</u></h1><br></center>
<table align="center" width="1000" border="3" cellspacing="0" cellpadding="10">
  <tbody>
    <tr bgcolor="#2A2A2A">
    <th scope="col"><thd>Match No.</thd></th>
      <th scope="col"><thd>Team A</thd></th>
      <th scope="col"><thd>Team B</thd></th>
      <th scope="col"><thd>Venue</thd></th>
      <th scope="col"><thd>date</thd></th>
      <th scope="col"><thd>Team Won</thd></th>
      <th scope="col"><thd>Points given</thd></th>
    </tr>';
    while($row = mysqli_fetch_array($result1, MYSQLI_ASSOC))
    {
        $output .='<tr bgcolor="#EBEBEB">
       <td> '. $row['matchno'] .'</td>
       <td> '. $row['team1'].'</td>
       <td> '. $row['team2'].' </td>
       <td> '. $row['venue'] .'</td>
       <td> '.$row['date'].' </td>
       <td>'.  $row['matchresult'].' </td>
       <td> '. $row['points'].' </td>
    </tr>';
     }
     $output .=' 
  </tbody>
</table>';
$output .= '</html></body></form>';
$to_email= filter_input(INPUT_POST, 'mail');
$subject = "IPL INFO";
$headers = "From: jejapurv@gmail.com";

if(isset($_POST["mail"]))
{
 if(mail($to_email, $subject, $output, $headers)) 
    {
     echo("Email successfully sent to $to_email...") ;
     ?>
     	<br>   <button onclick="window.location.href = '/DBMSmini/ViewSeason1.php?value=<?php print($sea); ?>';" value="FIXTURES">BACK</button> 
     <?php
    }
    else 
    { 
      echo("Email sending failed...");
      ?>
      	  <br> <button onclick="window.location.href = '/DBMSmini/ViewSeason1.php?value=<?php print($sea); ?>';" value="FIXTURES">BACK</button> 
      <?php
    }
}
?>