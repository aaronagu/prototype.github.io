<?php
require "header.php"
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="signup.css">
    <title></title>
  </head>
  <body>

      <div class="section-default">
        <center>
        <div class="signupForm">
          <center>
            <form class="" action="includes/signup.inc.php" method="post">
              <h2>Sign Up</h2>
              <?php
                if (isset($_GET['error'])) {
                  if ($_GET['error']=="emptyfields") {
                    echo '<p class="errormessage" >Fill in all fiels</p>';
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
                    echo '<p class="errormessage" >This username has already been taken</p>';
                  }
                  else if ($_GET['error']=="sqlerror") {
                    echo '<p class="errormessage" >SQL error</p>';
                  }
                }
                if (isset($_GET['signup'])) {
                  if ($_GET['signup']=="success") {
                    echo '<p class="succesmessage" >You have been succesfully registered.You may
                    login</p>';
                  }
                }
               ?>
              <div class="inputBox">
                <input type="text" name="uid" required="required">
                <span>Username</span>
              </div>
              <div class="inputBox">
                <input  type="text" name="mail" required="required">
                <span>E-mail</span>
              </div>
              <div class="inputBox">
                <input type="password" name="pwd" required="required">
                <span>Password</span>
              </div>
              <div class="inputBox">
                <input  type="password" name="pwd-repeat" required="required">
                <span>Repeat Password</span>
              </div>
              <div class="inputBox">
                <button type="submit" name="signup-button">Sign up</button>
              </div>
            </form>
          </center>
        </div>
    </div>
    </center>

  </body>
</html>
<?php
require "footer.php"
?>
