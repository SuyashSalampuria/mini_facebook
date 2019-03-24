<?php 
session_start();
   if($_SESSION["favcolor"]!=$_GET['id']){
          echo("not right");
          die();}
          $conn = mysqli_connect('192.168.121.187', 'first_year', 'first_year', 'first_year_db');
          $sql = "SELECT id, name, email, password, gender, age, phone ,uimg FROM suyash_users";
          $id=$_GET['id'];
          $name="select * from suyash_users where id='$id'";
          $results = mysqli_query($conn, $name);
          while ($row = $results->fetch_assoc()) {
          $nam1= $row['name'];
          $email1= $row['email'];
          $phone1= $row['phone'];
          $gender1= $row['gender'];
          $age1=  $row['age'];
          $uimg1= $row['uimg'];
          } ?>
<html>
<head>
<title>Form</title>
<script src="sign.js"></script>
<style>
    .ele{
      width: 100%;
      display: flex;
      flex-direction: row;
      justify-content: space-between;
      margin-top: 20px;
      display: inline-flex;
    }
    .orgi{
      width: 500px;
      margin: auto;
        display: flex;
        justify-content: space-between;
        flex-direction: column;
        align-items: center;
    }
    body{
      margin-top: 0px;
      background-color: #e9ebee;
    }
    .head{
      text-align: center;
    }
    .header{
      display: flex;
      flex-direction: row;
      
      height: 100px;
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
    .signbu{
      background-color: #4267b2;
      color: #ffffff;
      font-family: inherit;
      font-weight: bold;
      border: 1px solid black;
    }
    .logo{
      color: #ffffff;
      font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
      font-size: 2em;
      margin: 20px 0px 0px 10%;
    }
</style>
</head>
<body>
    <div class="header">
        <div class="logo">facebook</div>
        
       </div>
    </div>
      <h1 class="head">UPDATE INFO</h1>
      <form class="orgi" method="POST" action="profback.php" enctype="multipart/form-data">
      <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
     <div class="ele">
      <div>
            Phone.no</div><div> <input type="text" value=<?php echo $phone1 ?> name="number" placeholder="Phone no" id="phone" onchange="func()"></div>
      </div>
      <div id="phoneerr">
      </div>
    </div>
    <div class="ele">
      <div>
          Age</div><div> <input type="number" name="age" value=<?php echo $age1 ?>  placeholder="age" id="ag" onchange="func6()" min="0"></div>
      </div>
      <div id="agerr">
      </div>
    </div>
    <div class="ele">
      <div>
          Gender</div><div>
          <select name="gender" value=<?php echo $gender1 ?>>
          <option value="male">male</option>
          <option value="female">female</option>
          <option value="others">others</option>
          </select></div>
      </div>
    </div>
    <div class="ele">
      <div>
          E-mail</div><div> <input type="email" value=<?php echo $email1 ?> name="mail" placeholder="e-mail" id="mail" onchange="func1()"></div>
      </div>

      <div id="mailerr">

      </div>
    </div>
    <div class="ele">
      <div>
          Password</div><div> <input type="password" name="pass" placeholder="password" id="passw" onchange="func2()"></div>
          </div>
      <div id="passerr">

      </div>
    </div>
      <div class="ele">

      <div>
            Confirm Password </div><div><input type="password" name="cpass" placeholder="confirm password" id="confirm" onchange="func3()"></div>
      </div>

      <div id="confirmerr">

      </div>
    </div>
    <div class="ele">
      <div>
          Name </div><input type="text" name="name" value=<?php echo $nam1 ?> placeholder="Name" id="nam" onchange="func4()"></div>
      </div>
      <div id="namerr">

      </div>
    </div>
    <div class="ele" style="display: flex; justify-content: center;">
           <input type="file" name="imageUpload" id="imageUpload" >
      </div>

    <div class="ele" style="display: flex; justify-content: center;">

    <input type="submit" id="submit" onsubmit="return just()" >
    </div>
      </form>
</body>
</html>

