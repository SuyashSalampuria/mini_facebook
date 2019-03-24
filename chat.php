<?php
session_start();
 $_SESSION["favanimal"] = "cat";
 if($_SESSION["favcolor"]!=$_GET['ids']){
             echo("not right");
             die();}
$con=mysqli_connect('192.168.121.187', 'first_year', 'first_year', 'first_year_db');
// Check connection
if (mysqli_connect_errno())
{
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$result = mysqli_query($con,"SELECT * FROM suyash_chat");

echo "<table border='1'>
<tr>
<th>sent or recieved</th>
<th>Message</th>
<th>Time</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
 if(!(($row["ids"]==$_GET['ids'] && $row["idr"]==$_GET['idr'])||($row["ids"]==$_GET["idr"]&&$row["idr"]==$_GET["ids"]))) continue;
 if(($row["ids"]==$_GET['ids'] && $row["idr"]==$_GET['idr'])) $stat="sent";
 else $stat="recieved";
 echo "<tr>";
 echo "<td>".$stat."</td>";
  echo "<td>" . $row['message'] . "</td>";
  echo "<td>".$row['time']."</td>";
  echo "</tr>";
}
echo "</table>";
?>
<form name="form1" method="post" action="backchat.php">
<input id="message" name="message" type="text" size="35">
<input type = "hidden" name = "send" value = "<?php echo $_GET['ids'] ?>" />
<input type = "hidden" name = "recieve" value ="<?php echo $_GET['idr'] ?>"  />
<button type="submit" id="modal" data-modal="modal">SEND</button>
</form>
<button onclick="window.location.href = 'http://192.168.121.187/~suyash/php_assignment/welcome.php?id='+<?php echo $_SESSION["favcolor"] ?>">Go back to my profie</button> 
