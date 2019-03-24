<?php
$db = mysqli_connect('192.168.121.187', 'first_year', 'first_year', 'first_year_db');
$message = mysqli_real_escape_string($db, $_POST['message']);
$message=htmlspecialchars($message);
$send = mysqli_real_escape_string($db, $_POST['send']);
$recieve = mysqli_real_escape_string($db, $_POST['recieve']);

$query = "INSERT INTO suyash_chat (ids,idr, message)  VALUES($send,$recieve,'$message')";
        mysqli_query($db, $query);
        header("Location: http://192.168.121.187/~suyash/php_assignment/chat.php?ids=".$send."&idr=".$recieve);

                 ?>

