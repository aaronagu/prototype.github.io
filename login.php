<?php
require "header.php"
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="signup.css">
  </head>
  <body>
    <div class="section-default">
      <center>
      <div class="signupForm">
        <center>
          <form class="" action="includes/login.inc.php" method="post">
            <h2>Log In</h2>
            <?php
              if (isset($_GET['error'])) {
                if ($_GET['error']=="emptyfields") {
                  echo '<p class="errormessage" >Fill in all fiels</p>';
                }
                else if ($_GET['error']=="wrongpwd") {
                  echo '<p class="errormessage" >Wrong password</p>';
                }
                else if ($_GET['error']=="nouser") {
                  echo '<p class="errormessage" >This user does not exist</p>';
                }
                else if ($_GET['error']=="invalidmail") {
                  echo '<p class="errormessage" >Invalid E-mail</p>';
                }
                else if ($_GET['error']=="invaliduid") {
                  echo '<p class="errormessage" >Invalid username</p>';
                }
                else if ($_GET['error']=="passwordcheck") {
                  echo '<p class="errormessage" >You have not repeated your password correctly</p>';
                }
                else if ($_GET['error']=="usertaken") {
                  echo '<p class="errormessage" >This username has been taken</p>';
                }
                else if ($_GET['error']=="sqlerror") {
                  echo '<p class="errormessage" >SQL error</p>';
                }
              }
              if (isset($_GET['login'])) {
                if ($_GET['login']=="success") {
                  echo '<p class="succesmessage" >You have been succesfully registered.</p>';
                }
              }
             ?>
            <div class="inputBox">
              <input type="text" name="mailuid" value="" required="required">
              <span>Username/E-mail</span>
            </div>
            <div class="inputBox">
              <input type="password" name="pwd" value="" required="required">
              <span>Password</span>
            </div>
            <div class="inputBox">
              <button type="submit" name="login-submit" required="required">Log In</button>
            </div>
          </form>
      </div>
      </center>
    </div>
    </center>
  </body>
</html>
<?php
require "footer.php"
?>
