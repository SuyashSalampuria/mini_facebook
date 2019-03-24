<?php
$username = "";
$email    = "";
$errors = array();
$first_year_db = mysqli_connect('192.168.121.187', 'first_year', 'first_year', 'first_year_db');
$username = mysqli_real_escape_string($first_year_db, $_POST['name']);
$email = mysqli_real_escape_string($first_year_db, $_POST['mail']);
$password_1 = mysqli_real_escape_string($first_year_db, $_POST['pass']);
$password_2 = mysqli_real_escape_string($first_year_db, $_POST['cpass']);
$age = mysqli_real_escape_string($first_year_db, $_POST['age']);
$phone = mysqli_real_escape_string($first_year_db, $_POST['number']);
$gender = mysqli_real_escape_string($first_year_db, $_POST['gender']);
$target_dir = "images/";
$target_file = $target_dir . basename($_FILES["imageUpload"]["name"]);
$uploadOk=1;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
$image=basename( $_FILES["imageUpload"]["name"],".jpeg");
if (empty($username)) { array_push($errors, "Username is required"); }
if (empty($email)) { array_push($errors, "Email is required"); }
if (empty($password_1)) { array_push($errors, "Password is required"); }
if ($password_1 != $password_2) {
array_push($errors, "The two passwords do not match");
 }
if (!empty($errors)) {
       echo $errors;
       die();
}
$sql = "SELECT * FROM suyash_users";
 $result1 = $first_year_db->query($sql);
  if ($result1->num_rows > 0) {
  while($row = $result1->fetch_assoc()) {
    if(($row["email"]== $email)|| ($row["phone"]==$phone )){echo "Duplicate"; die(); }
  	$password = md5($password_1);
  	$query = "INSERT INTO suyash_users (name, gender,age ,phone, email, password ,uimg)
  			  VALUES('$username','$gender','$age','$phone','$email', '$password', '$image')";
    mysqli_query($first_year_db, $query);}}
    $query1="select id from suyash_users where email='$email'";
    //echo $query1;
    $id=mysqli_query($first_year_db, $query1);
    $row1=$id->fetch_assoc();
    $id = (int)$row1['id'];
    session_start();
    $_SESSION["favcolor"] = $id;
    //print_r($_SESSION);
    header("Location: http://192.168.121.187/~suyash/php_assignment/welcome.php?id=".$id);
 ?>
