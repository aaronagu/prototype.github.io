<?php
session_start();
?>
<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="header.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
  </head>
  <body>
    <header>
      <div class="inner-width">
        <h1 class="logo"><span style="color:#273b91;">Crypt</span></h1>
        <i class="menu-toggle-btn fas fa-bars"></i>
        <nav class="navigation-menu">
          <a href="index.php"><i class="fas fa-home home"></i> Home</a>
          <a href="#"></i> Apps</a>
          <a href="aboutus.php"></i> About</a>
          <a href="review.php"></i> Reviews</a>
          <a href="contact.php"></i> Contact</a>
          <?php

          if (isset($_SESSION['usersid'])) {

            echo '<form  class="abj" action="includes/logout.inc.php" method="post">
                   <button class="button" name="logout-submit"><i class="fas fa-" aria-hidden="true"></i>LOG-OUT</button>
                  </form>';
            echo '<form  class="abjb" action="review.php" method="post">
                   <button class="button" name="logout-submit"><i class="fas fa-pen" aria-hidden="true"></i>WRITE A REVIEW</button>
                  </form>
            ';
          }else{

            echo '<form class="abjb" action="login.php" method="post">
              <button class="button" type="submit" name="button"><i class="fas fa-lock" aria-hidden="true"></i>
                LOGIN</button>
            </form>';
            echo '<form class="abj" action="signup.php" method="post">
                   <button class="button" name=""><i class="fas fa-lock-open" aria-hidden="true"></i>
                     SIGN UP</button>
                  </form>';
            }

           ?>


        </nav>
      </div>
    </header>
    <script src="script.js"></script>
  </body>
</html>
