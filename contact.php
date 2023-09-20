<?php
require "header.php"
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8" content="width=device-width, initial-scale=1.0">
    <title>Contact Us -Crypt</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" type= "text/css" href="contact.css">
  </head>
  <body>
    <section class="contact">
      <div class="content">
        <h2>Contact Us</h2>
        <p>We are eager to hear from you. Please feel free to send us a message regarding any queries you may have</p>
      </div>
      <div class="container">
        <div class="contactInfo">
          <div class="box">
            <div class="icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
            <div class="text">
              <h3>Phone</h3>
              <p>+27 69 358 9753</p>
            </div>
          </div>
          <div class="box">
            <div class="icon"><i class="fa fa-envelope" aria-hidden="true"></i></i></div>
            <div class="text">
              <h3>Email</h3>
              <p>info@Crypt.com</p>
            </div>
          </div>
        </div>
        <div class="contactForm">
          <form>
            <h2>Send Message</h2>
            <div class="inputBox">
              <input type="text" name="" required="required">
              <span>Full Name</span>
            </div>
            <div class="inputBox">
              <input type="text" name="" required="required">
              <span>Email</span>
            </div>
            <div class="inputBox">
              <textarea required="required"></textarea>
              <span>Type your Message...</span>
            </div>
            <div class="inputBox">
              <input type="submit" name="" value="Send">
            </div>
          </form>
        </div>
      </div>
    </section>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  </body>
</html>
<?php
require "footer.php"
?>
