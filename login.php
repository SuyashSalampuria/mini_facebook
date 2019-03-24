<?php
$db = mysqli_connect('192.168.121.187', 'first_year', 'first_year', 'first_year_db');
$email = mysqli_real_escape_string($db, $_POST['enter']);
$password = mysqli_real_escape_string($db, $_POST['pa1']);
$password = md5($password);
$query1 = "SELECT id FROM suyash_users WHERE email='$email' AND password='$password'";
$result1 = mysqli_query($db, $query1);
$row2=$result1->fetch_assoc();
$id = (int) $row2['id'];
if (mysqli_num_rows($result1) == 1){
 session_start();
$_SESSION["favcolor"] = $id;
if(!empty($_POST["remember"])) {
    setcookie ("sid",$id,time()+ 3600);
} else {
    setcookie("sid","");
}
  header('Location:http://192.168.121.187/~suyash/php_assignment/welcome.php?id='.$id); 
    }
    ?>
