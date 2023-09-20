<?php
require "header.php"
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="review.css">
  </head>
  <body>
    <div class="reviewpage">
      <div class="displayreview">
        <?php
        if (isset($_SESSION['usersid'])) {

          echo '
          <div class="writereview neumorphic-shadows neumorphic-shadows-hover">
            <div class="stars">
             <form method="post" action="includes/review.inc.php">

              <input class="star star-5" id="star-5" type="radio" name="stars" value="5stars"/>
              <label class="star star-5" for="star-5"></label>
              <input class="star star-4" id="star-4" type="radio" name="stars" value="4stars"/>
              <label class="star star-4" for="star-4"></label>
              <input class="star star-3" id="star-3" type="radio" name="stars" value="3stars"/>
              <label class="star star-3" for="star-3"></label>
              <input class="star star-2" id="star-2" type="radio" name="stars" value="2stars"/>
              <label class="star star-2" for="star-2"></label>
              <input class="star star-1" id="star-1" type="radio" name="stars" value="1stars"/>
              <label class="star star-1" for="star-1"></label>
              <form method="post" action="includes/review.inc.php">
                <h2>Rate Crypt</h2>
                <div class="inputBox">
                  <textarea required="required" name="textarea"></textarea>
                  <span>Type your Review...</span>
                </div>
                <div class="inputBox">
                  <input type="submit" name="review-submit" >
                </div>
              </form>
             </form>
            </div>
          </div>
          ';
        }
          require "includes/dbreview.inc.php";
          $sql="SELECT * FROM reviewtext2 ";
          $results= mysqli_query($conn,$sql);
          $resultCheck= mysqli_num_rows($results);
          if ($resultCheck>0) {
            echo '';
            while ($rows= mysqli_fetch_assoc($results)) {
              echo '
                 <br><br>
                 <div class="writtenbydiv">
                   <h2 class="writtenby">Written By:'.$rows['uidpost']."</h2>
                 </div>";
#              echo $rows['date1']."";
              if ($rows['starnum']=="5stars") {
                echo '
                <div class="reviewplusstars neumorphic-shadows neumorphic-shadows-hover">
                  <div class="stars">
                    <span style="font-size:250%;color:yellow;">&starf;</span>
                    <span style="font-size:250%;color:yellow;">&starf;</span>
                    <span style="font-size:250%;color:yellow;">&starf;</span>
                    <span style="font-size:250%;color:yellow;">&starf;</span>
                    <span style="font-size:250%;color:yellow;">&starf;</span>
                  </div>'.$rows['review'].'
                </div>


                ';
              }
              elseif ($rows['starnum']=="4stars") {
                echo '
                <div class="reviewplusstars neumorphic-shadows neumorphic-shadows-hover">
                  <div class="stars">
                    <span style="font-size:250%;color:yellow;">&starf;</span>
                    <span style="font-size:250%;color:yellow;">&starf;</span>
                    <span style="font-size:250%;color:yellow;">&starf;</span>
                    <span style="font-size:250%;color:yellow;">&starf;</span>
                    <span style="font-size:250%;color:lightgrey;">&starf;</span>
                  </div>'.$rows['review'].'
                </div>
                ';
              }
              elseif ($rows['starnum']=="3stars") {
                echo '
                <div class="reviewplusstars neumorphic-shadows neumorphic-shadows-hover">
                  <div class="stars">
                    <span style="font-size:250%;color:yellow;">&starf;</span>
                    <span style="font-size:250%;color:yellow;">&starf;</span>
                    <span style="font-size:250%;color:yellow;">&starf;</span>
                    <span style="font-size:250%;color:lightgrey;">&starf;</span>
                    <span style="font-size:250%;color:lightgrey;">&starf;</span>
                  </div>'.$rows['review'].'
                </div>
                ';

              }
              elseif ($rows['starnum']=="2stars") {
                echo '
                <div class="reviewplusstars neumorphic-shadows neumorphic-shadows-hover">
                  <div class="stars">
                    <span style="font-size:250%;color:yellow;">&starf;</span>
                    <span style="font-size:250%;color:yellow;">&starf;</span>
                    <span style="font-size:250%;color:lightgrey;">&starf;</span>
                    <span style="font-size:250%;color:lightgrey;">&starf;</span>
                    <span style="font-size:250%;color:lightgrey;">&starf;</span>
                  </div>'.$rows['review'].'
                </div>
                ';
              }
              elseif ($rows['starnum']=="1stars") {
                echo '
                <div class="reviewplusstars neumorphic-shadows neumorphic-shadows-hover">
                  <div class="stars">
                    <span style="font-size:250%;color:yellow;">&starf;</span>
                    <span style="font-size:250%;color:lightgrey;">&starf;</span>
                    <span style="font-size:250%;color:lightgrey;">&starf;</span>
                    <span style="font-size:250%;color:lightgrey;">&starf;</span>
                    <span style="font-size:250%;color:lightgrey;">&starf;</span>
                  </div>'.$rows['review'].'
                </div>
                ';
              }
            }
          }
         ?>
      </div>
    </div>
  </body>
</html>
<?php
require "footer.php"
?>
