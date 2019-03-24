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
        <div id="signin">
    <form method="post" id="myform" name="Form" action="login.php">
    <div style="margin-top: 2px;">Email id: <input name="enter" type="email" value="<?php if(isset($_COOKIE["email"])) { echo $_COOKIE["email"];} ?>" style="margin-left: 15px; "></div>
          <div style="margin-top: 2px;">Password: <input name="pa1" type="password" value="<?php if(isset($_COOKIE["password"])) { echo $_COOKIE["password"]; } ?>"></div>
         <div style="margin-top: 2px;"><input type="checkbox" name="remember">
         <label for="remember">Remember Me</label></div>
          <div style="margin-top: 2px;"><button id="signbu" class="signbu" type="submit">Sign in!</button> </div>
          </form>
          </div>
    </div>
      <h1 class="head">Sign up</h1>
      <form class="orgi" onSubmit="return just()" method="POST" action="server.php" enctype="multipart/form-data">
         <div class="ele">
      <div>
            Phone.no</div><div> <input type="text" name="number" placeholder="Phone no" id="phone" onchange="func()"></div>
      </div>
      <div id="phoneerr">
      </div>
    </div>
    <div class="ele">
      <div>
          Age</div><div> <input type="number" name="age" placeholder="age" id="ag" onchange="func6()" min="0"></div>
      </div>
      <div id="agerr">
      </div>
    </div>
    <div class="ele">
      <div>
          Gender</div><div>
          <select name="gender">
          <option value="male">male</option>
          <option value="female">female</option>
          <option value="others">others</option>
          </select></div>
      </div>
    </div>
    <div class="ele">
      <div>
          E-mail</div><div> <input type="email" name="mail" placeholder="e-mail" id="mail" onchange="func1()"></div>
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
          e Confirm Password </div><div><input type="password" name="cpass" placeholder="confirm password" id="confirm" onchange="func3()"></div>
      </div>

      <div id="confirmerr">

      </div>
    </div>
    <div class="ele">
      <div>
          Name </div><input type="text" name="name" placeholder="Name" id="nam" onchange="func4()"></div>
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
      <script>
      var a=document.forms["Form"]["enter"].value;
      var b=document.forms["Form"]["pa1"].value;
      if (!(a==""||a==null||b==""||b==null)){
          document.getElementById("signbu").click();}
      </script>
</body>
</html>
