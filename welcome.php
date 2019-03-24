<?php 
session_start();
if(!isset($_COOKIE['sid'])){
      $_COOKIE['sid']="";}
      if (!isset($_SESSION['favcolor'])) {
         $_SESSION['favcolor']=0;
      }
   if(!(($_COOKIE['sid']==$_GET['id'])||($_SESSION['favcolor']==$_GET['id']))){
     echo("not right");
   die();}
   ?>
<html>
<head>
    <style>
        body{
            margin: 0px;
        }
    .logo{
      color: #ffffff;
      font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
      font-size: 2em;
      margin: 8px 0px 0px 10%;
    }
    .header{
      display: flex;
      flex-direction: row;
      height: 50px;
      background-color: #3a5898;
      font-family: inherit;
      color: #ffffff;
    }
    #signin{
      float: right;
      margin-right: 90px;
      margin-top: 15px;
      margin-left: 50%;
     }
    #signout{
        float: right;
        margin-right: 45px;
        margin-top: 20px;
        margin-left: 50%;
        }
</style>
</head>
<body>
<?php
    $conn = mysqli_connect('192.168.121.187', 'first_year', 'first_year', 'first_year_db');
    $id=$_GET['id'];
    $name5="select * from suyash_users where id='$id'";
    $results7 = mysqli_query($conn, $name5);
       while ($row8 = $results7->fetch_assoc()) {
       $myname= $row8['name'];}
         ?>
   <div class="header">
        <div class="logo">facebook</div>
        <div id="signin">
              <div>  Logged in as <?php echo $myname ?></div>
             <a href="http://192.168.121.187/~suyash/php_assignment/out.php"><div>Log Out</div></a>
          </div>
        </div>
   <?php
    $conn = mysqli_connect('192.168.121.187', 'first_year', 'first_year', 'first_year_db');
    $sql = "SELECT id, name, email, password, gender, age, phone ,uimg FROM suyash_users";
    $id=$_GET['id'];
    $name="select * from suyash_users where id='$id'";
    $results = mysqli_query($conn, $name);
    while ($row = $results->fetch_assoc()) {
          echo $row['name']."<br>";
          echo $row['email']."<br>";
          echo $row['phone']."<br>";
          echo $row['gender']."<br>";
          echo "AGE:".$row['age']."<br>";
          echo $row['uimg']."<br>";
          echo '<img src="images/'.$row['uimg'].'.jpeg"><br>';

    } ?>
    <button onclick="window.location.href = 'http://192.168.121.187/~suyash/php_assignment/profile.php?id='+<?php echo $id ?>">UPDATE PROFILE </button>
    <h1>Click to chat</h1>
   <?php
    $sql = "SELECT id, name, email, password, gender, age, phone FROM suyash_users";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      if($row["id"]== $id) continue;
        $idr=$row["id"];
     echo '<div onclick="redre('. $idr.')"><button>' . $row["name"].'</button></div>'; // id=$row[$id]
    }
    }
    ?>
    <script>
      function redre(a){
       console.log(a);
        console.log('<?php echo $id ?>');
      window.location.href = "http://192.168.121.187/~suyash/php_assignment/chat.php?ids="+"<?php echo $id ?>"+"&idr="+a;
      }

    </script>
</body>
</html>
