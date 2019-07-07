<html>
<head>
    <title>Create Account</title>
    <style type="text/css">
        body{
          background: url(img/gambars/blur.jpeg) center no-repeat;
          background-size: 1366px;
          background-position: 0px -50px ;
      }
  </style>
</head>
<body>
    <center>
        <form method="post" action="prosesdaftarpatch.php" enctype="multipart/form-data">
          <table style="background: url(img/gambars/background_daftar.jpeg) center no-repeat; width: 416px; height: 630px; background-size: 576px; margin-top: 20px;box-shadow: 0px 0px 0px 5px #0e0e0e;">
            <th style="color: white; font-size: 30px; padding-top: 75px">Registration</th>
            <tr><td style="color: white; position: absolute; margin-left: 172px; margin-top: -15px;"><br>Username</td></tr>
            <tr><td><input name="username" type="text" required style="width: 210px; position: absolute; height: 20px; margin-left: 100px; margin-top: -18px"></td></tr>
            <tr><td style="color: white; position: absolute; margin-left: 175px; margin-top: -15px;"><br>Password</td></tr>
            <tr><td><input name="password" type="password" required style="width: 210px; position: absolute; height: 20px; margin-left: 100px; margin-top: -18px"></td></tr>
            <tr><td style="color: white; position: absolute; margin-left: 172px; margin-top: -15px;"><br>Nickname</td></tr>
            <tr><td><input type="text" name="nickname" required style="width: 210px; position: absolute; height: 20px; margin-left: 100px; margin-top: -18px"></td></tr>
            <tr><td style="color: white; position: absolute; margin-left: 100px; margin-top: -15px;"><br>Gender</td></tr>
            <tr><td><select name="choice" style="width: 100px; position: absolute; height: 20px; margin-left: 100px; margin-top: -18px">
              <option value="male">Male</option>
              <option value="female">Female</option>
          </select>
      </td>
  </tr>
  <tr ><td style="color: white; position: absolute; margin-left: 222px; margin-top: -95px;"><br>Avatar</td></tr>
  <tr><td><input type="file" id="images" name="images" style="display:none" onchange="document.getElementById('filename').value=this.value"><input type="hidden" id="filename"><input type="button" value="" onclick="document.getElementById('images').click()" style="background: url(img/gambars/choosefile.png) center no-repeat;background-size: 60px; width: 65px; position: absolute; height: 30px; margin-left: 220px; margin-top: -102px;border-radius: 7px;border: none;"></td></tr>
  <tr><td><input value="" name="daftar" type="submit" style="position:absolute; margin-top: -70px; margin-left: 163px; background: url(img/gambars/daftar.png) center no-repeat; height: 44px; width: 95px; background-size: 90px;;border: none;border-radius: 10px;"></td></tr>
  <tr><td style="position: absolute; margin-top: -10px; margin-left: 110px; color: black;text-shadow: 0px 0px 5px white;"><b>Sudah Punya Akun ?</b><a href="login.php" style="color: black;text-shadow: 0px 0px 5px white;text-decoration: none"><b>Login</b></a></td></tr>
</table>
</form>
</center>
</body>
</html>