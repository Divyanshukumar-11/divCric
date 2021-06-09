<?php
$conn = new mysqli("localhost", "root", "", "scoreboard");

// Check connection
if ($conn->connect_errno) {
    echo "Failed to connect to MySQL: " . $conn->connect_error;
    exit();
}


// MATCH1

$query_TOTAL_RESULT_1="SELECT * FROM MATCHES WHERE MATCH_ID=100;";
$result_TOTAL_RESULT_1 = $conn->query($query_TOTAL_RESULT_1);
if (!$result_TOTAL_RESULT_1) {
?>
    <script>
        alert("error occured while fetching the data");
    </script>
<?php
    exit();
}

$query_TOTAL_INFO_1_1="SELECT * FROM TEAMS WHERE MATCH_ID=100 AND T_NAME='Australia';";
$result_TOTAL_INFO_1_1 = $conn->query($query_TOTAL_INFO_1_1);
if (!$result_TOTAL_INFO_1_1) {
?>
    <script>
        alert("error occured while fetching the data");
    </script>
<?php
    exit();
}

$query_TOTAL_INFO_1_2="SELECT * FROM TEAMS WHERE MATCH_ID=100 AND T_NAME='India';";
$result_TOTAL_INFO_1_2 = $conn->query($query_TOTAL_INFO_1_2);
if (!$result_TOTAL_INFO_1_2) {
?>
    <script>
        alert("error occured while fetching the data");
    </script>
<?php
    exit();
}



//MATCH2
$query_TOTAL_RESULT_2="SELECT * FROM MATCHES WHERE MATCH_ID=101;";
$result_TOTAL_RESULT_2 = $conn->query($query_TOTAL_RESULT_2);
if (!$result_TOTAL_RESULT_2) {
?>
    <script>
        alert("error occured while fetching the data");
    </script>
<?php
    exit();
}

$query_TOTAL_INFO_2_1="SELECT * FROM TEAMS WHERE MATCH_ID=101 AND T_NAME='Australia';";
$result_TOTAL_INFO_2_1 = $conn->query($query_TOTAL_INFO_2_1);
if (!$result_TOTAL_INFO_2_1) {
?>
    <script>
        alert("error occured while fetching the data");
    </script>
<?php
    exit();
}

$query_TOTAL_INFO_2_2="SELECT * FROM TEAMS WHERE MATCH_ID=101 AND T_NAME='India';";
$result_TOTAL_INFO_2_2 = $conn->query($query_TOTAL_INFO_2_2);
if (!$result_TOTAL_INFO_2_2) {
?>
    <script>
        alert("error occured while fetching the data");
    </script>
<?php
    exit();
}




//MATCH3

$query_TOTAL_RESULT_3="SELECT * FROM MATCHES WHERE MATCH_ID=102;";
$result_TOTAL_RESULT_3= $conn->query($query_TOTAL_RESULT_3);
if (!$result_TOTAL_RESULT_3) {
?>
    <script>
        alert("error occured while fetching the data");
    </script>
<?php
    exit();
}

$query_TOTAL_INFO_3_1="SELECT * FROM TEAMS WHERE MATCH_ID=102 AND T_NAME='Australia';";
$result_TOTAL_INFO_3_1 = $conn->query($query_TOTAL_INFO_3_1);
if (!$result_TOTAL_INFO_3_1) {
?>
    <script>
        alert("error occured while fetching the data");
    </script>
<?php
    exit();
}

$query_TOTAL_INFO_3_2="SELECT * FROM TEAMS WHERE MATCH_ID=102 AND T_NAME='India';";
$result_TOTAL_INFO_3_2 = $conn->query($query_TOTAL_INFO_3_2);
if (!$result_TOTAL_INFO_3_2) {
?>
    <script>
        alert("error occured while fetching the data");
    </script>
<?php
    exit();
}

?>


<!-- HTML -->

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>divCRIC</title>

      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
      <link rel="stylesheet" href="css/style_score.css">
  </head>
  <body>
    <div class="main">
      <div class="navbar navbar-expand-md navbar-dark bg-primary">
        <a class="navbar-brand" href="index.php">divCRIC</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="scores.php">Scores</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="upcoming.php">Upcoming</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="photos.html">Photos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login.php">Admin</a>
            </li>
          </ul>
        </div>
      </div>

      <!-- MATCH1 -->

      <div class="container score">
        <table class="tab">
          <tr>
            <td> <img src="photos/aus.jpg" alt="aus logo" class="image"> </td>
            <td>
              <table>
              <tr>
                <td><p><a href="match1.php">Australia vs India, 1st T20I - Cricket Score</a></p></td>
              </tr>
              <tr>
                <td>
                  <div class="row">
                    <div class="col">
                      <?php while ($row_TOTAL_INFO_1_1 = $result_TOTAL_INFO_1_1->fetch_assoc())
                      {
                      ?>
                      <?php echo $row_TOTAL_INFO_1_1['TOTAL_RUNS'];?>
                      -
                      <?php echo $row_TOTAL_INFO_1_1['TOTAL_WICKETS'];?>
                      (<?php echo $row_TOTAL_INFO_1_1['OVERS_PLAYED'];?>)
                      <?php
                      }
                       ?>
                    </div>
                    <div class="col">
                      <?php while ($row_TOTAL_INFO_1_2 = $result_TOTAL_INFO_1_2->fetch_assoc())
                      {
                      ?>
                      <?php echo $row_TOTAL_INFO_1_2['TOTAL_RUNS'];?>
                      -
                      <?php echo $row_TOTAL_INFO_1_2['TOTAL_WICKETS'];?>
                      (<?php echo $row_TOTAL_INFO_1_2['OVERS_PLAYED'];?>)
                      <?php
                      }
                       ?>
                    </div>
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <?php while ($row_TOTAL_RESULT_1 = $result_TOTAL_RESULT_1->fetch_assoc())
                  {
                  ?>
                  <?php echo $row_TOTAL_RESULT_1['WON'];?> has won the match
                  <?php
                  }
                   ?>
                </td>
              </tr>
              <tr><p class="highlights"><a href="https://www.cricket.com.au/video/australia-india-third-t20-international-match-highlights-manuka-oval/2020-12-04">Highlights</p></a></tr>
              </table>
            </td>
            <td><img src="photos/ind.png" alt="ind logo" class="image"></td>
          </tr>
        </table>
      </div>

      <!-- MATCH2 -->

      <div class="container score">
        <table class="tab">
          <tr>
            <td> <img src="photos/aus.jpg" alt="aus logo" class="image"> </td>
            <td>
              <table>
                <tr>
                  <td><p><a href="match2.php">Australia vs India, 2nd T20I - Cricket Score</a></p></td>
                </tr>
                <tr>
                  <td>
                    <div class="row">
                      <div class="col">
                        <?php while ($row_TOTAL_INFO_2_1 = $result_TOTAL_INFO_2_1->fetch_assoc())
                        {
                        ?>
                        <?php echo $row_TOTAL_INFO_2_1['TOTAL_RUNS'];?>
                        -
                        <?php echo $row_TOTAL_INFO_2_1['TOTAL_WICKETS'];?>
                        (<?php echo $row_TOTAL_INFO_2_1['OVERS_PLAYED'];?>)
                        <?php
                        }
                         ?>
                      </div>
                      <div class="col">
                        <?php while ($row_TOTAL_INFO_2_2 = $result_TOTAL_INFO_2_2->fetch_assoc())
                        {
                        ?>
                        <?php echo $row_TOTAL_INFO_2_2['TOTAL_RUNS'];?>
                        -
                        <?php echo $row_TOTAL_INFO_2_2['TOTAL_WICKETS'];?>
                        (<?php echo $row_TOTAL_INFO_2_2['OVERS_PLAYED'];?>)
                        <?php
                        }
                         ?>
                      </div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td><?php while ($row_TOTAL_RESULT_2 = $result_TOTAL_RESULT_2->fetch_assoc())
                  {
                  ?>
                  <?php echo $row_TOTAL_RESULT_2['WON'];?> has won the match
                  <?php
                  }
                   ?></td>
                </tr>
                <tr><p class="highlights"><a href="https://www.cricket.com.au/video/australia-india-second-t20-international-scg-full-match-highlights-hardik-pandya-innings/2020-12-06">Highlights</p></a></tr>
              </table>
            </td>
            <td><img src="photos/ind.png" alt="ind logo" class="image"></td>
          </tr>
        </table>
      </div>

      <!-- MATCH3 -->

      <div class="container score">
        <table class="tab">
          <tr>
            <td> <img src="photos/aus.jpg" alt="aus logo" class="image"> </td>
            <td>
              <table>
                <tr>
                  <td><p><a href="match3.php">Australia vs India, 3rd T20I - Cricket Score</a></p></td>
                </tr>
                <tr>
                  <td>
                    <div class="row">
                      <div class="col">
                        <?php while ($row_TOTAL_INFO_3_1 = $result_TOTAL_INFO_3_1->fetch_assoc())
                        {
                        ?>
                        <?php echo $row_TOTAL_INFO_3_1['TOTAL_RUNS'];?>
                        -
                        <?php echo $row_TOTAL_INFO_3_1['TOTAL_WICKETS'];?>
                        (<?php echo $row_TOTAL_INFO_3_1['OVERS_PLAYED'];?>)
                        <?php
                        }
                         ?>
                      </div>
                      <div class="col">
                        <?php while ($row_TOTAL_INFO_3_2 = $result_TOTAL_INFO_3_2->fetch_assoc())
                        {
                        ?>
                        <?php echo $row_TOTAL_INFO_3_2['TOTAL_RUNS'];?>
                        -
                        <?php echo $row_TOTAL_INFO_3_2['TOTAL_WICKETS'];?>
                        (<?php echo $row_TOTAL_INFO_3_2['OVERS_PLAYED'];?>)
                        <?php
                        }
                         ?>
                      </div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <?php while ($row_TOTAL_RESULT_3 = $result_TOTAL_RESULT_3->fetch_assoc())
                    {
                    ?>
                    <?php echo $row_TOTAL_RESULT_3['WON'];?> has won the match
                    <?php
                    }
                     ?>
                  </td>
                </tr>
                <tr><p class="highlights"><a href="https://www.cricket.com.au/video/australia-india-match-highlights-third-t20-international-scg-virat-kohli-mitch-swepson-glenn-maxwell/2020-12-08">Highlights</p></a></tr>
              </table>
            </td>
            <td><img src="photos/ind.png" alt="ind logo" class="image"></td>
          </tr>
        </table>
      </div>

    </div>



  </body>
</html>
