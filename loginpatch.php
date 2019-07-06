<?php
session_start();
$_SESSION['ran'] = rand(1000, 9999);
if (isset($_SESSION['username'])){
  $status = true;
} else {
  $status = false;
}
if(isset($_GET['logout'])) {
  session_destroy();
  setcookie('waktu', '', 0, '/Kartu');
  setcookie('score', '', 0, '/Kartu');
  header('Location: login.php');
  exit;
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  </head>
  <body>
  </head>
  <body>
  <center>
    <form action="prosesloginpatch.php" method="post">
      <?php
      // jika status = false (cookie username tak ada), maka tampilkan form input nama
      // dan tombol submit dg nama 'submit1'
      if ($status == false){
        ?>
        <table>
          <tr><td>Username</td></tr>
          <tr><td><input name="username" type="text" required></td></tr>
          <tr><td>Password</td></tr>
          <tr><td><input name="password" type="password" required></td></tr>
          <tr><td>Captcha : <?php echo $_SESSION['ran']; ?></td></tr>
          <tr><td><input name="captcha" type="text" required></td></tr>
          <tr><td><input type="submit" value="Login" name="login"></td></tr>
          <tr><td><b>Belum Punya Akun ?</b> <a href="daftar.php"><b>Register</b></a></td></tr>
        </table>
        <?php   
      } else {
      // jika status = true (cookie username ada), maka tampilkan username
      // tanggal terakhir kali main, dan score. Data ini diambil dari cookie
      // serta tampilkan tombol submit dg nama 'submit2'
        echo "<center><h1 style='margin-top: 100px;color:#e5e5e5; opacity:0.7; margin-left:60px;'>".$_SESSION['nickname']."</h1></center>";
        ?>
        <div id="back" style="background: url(img/gambars/logout.png) center no-repeat; width: 100px; height: 100px; background-size: 100px;margin-left: -50px;margin-top: -20px" onClick="window.location='?logout'"></div>
        <div id="back" style="background: url(img/gambars/start.png) center no-repeat; width: 100px; height: 100px; background-size: 100px;margin-left: 170px;margin-top: -100px;" onClick="window.location='account.php'"></div>
      </center>
      <?php   
    }
    ?>
  </form>
</center>
</body>
</html>