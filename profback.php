<?php
$first_year_db = mysqli_connect('192.168.121.187', 'first_year', 'first_year', 'first_year_db');
// REGISTER USER
//if (isset($_POST['suyash_user'])) {
  // receive all input values from the form
session_start();
$id = mysqli_real_escape_string($first_year_db, $_POST['id']);
$username = mysqli_real_escape_string($first_year_db, $_POST['name']);
$email = mysqli_real_escape_string($first_year_db, $_POST['mail']);
$password_1 = mysqli_real_escape_string($first_year_db, $_POST['pass']);
$password_2 = mysqli_real_escape_string($first_year_db, $_POST['cpass']);
$age = mysqli_real_escape_string($first_year_db, $_POST['age']);
$phone = mysqli_real_escape_string($first_year_db, $_POST['number']);
$gender = mysqli_real_escape_string($first_year_db, $_POST['gender']);
 $target_dir = "images/";
  $target_file = $target_dir.basename($_FILES["imageUpload"]["name"]);
    $uploadOk=1;
      $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
        if (move_uploaded_file($_FILES["imageUpload"]["tmp_name"], $target_file)) {
               echo "The file ". basename( $_FILES["imageUpload"]["name"]). " has been uploaded.";
                               }
      else {
                    echo "Sorry, there was an error uploading your file.";
                                 }
$image=basename( $_FILES["imageUpload"]["name"],".jpeg"); 
if (empty($username)) { array_push($errors, "Username is required"); }
if (empty($email)) { array_push($errors, "Email is required"); }
if (empty($password_1)) { array_push($errors, "Password is required"); }
if ($password_1 != $password_2) {
  array_push($errors, "The two passwords do not match");
   }
//$conn = mysqli_connect('192.168.121.187', 'first_year', 'first_year', 'first_year_db');
$sql = "SELECT * FROM suyash_users";
 $result1 = $first_year_db->query($sql);
   if ($result1->num_rows > 0) {
       while($row = $result1->fetch_assoc()) {
             if($row["id"]==$id) continue;
             if(($row["email"]== $email)|| ($row["phone"]==$phone )){echo "Duplicate"; die(); }
       }}
$password = md5($password_1);//encrypt the password before saving in the database
//$id=mysqli_query($first_year_db, $query1);
//echo $id;
 $query = "UPDATE suyash_users SET name='$username', gender='$gender', age='$age', phone='$phone', email='$email', password='$password', uimg='$image'  where id=$id";
 mysqli_query($first_year_db, $query);

     header("Location: http://192.168.121.187/~suyash/php_assignment/welcome.php?id=".$id);
     ?>
