<?php
$conn = new mysqli("localhost", "root", "", "scoreboard");

// Check connection
if ($conn->connect_errno) {
    echo "Failed to connect to MySQL: " . $conn->connect_error;
    exit();
}

// INFO

$query_INFO="SELECT * FROM MATCHES WHERE MATCH_ID=101";
$result_INFO = $conn->query($query_INFO);
if (!$result_INFO) {
?>
    <script>
        alert("error occured while fetching the data");
    </script>
<?php
    exit();
}

$query_VENUE="SELECT * FROM VENUE WHERE MATCH_ID=101";
$result_VENUE = $conn->query($query_VENUE);
if (!$result_VENUE) {
?>
    <script>
        alert("error occured while fetching the data");
    </script>
<?php
    exit();
}

$query_NAME1="SELECT * FROM MATCHES WHERE MATCH_ID=101";
$result_NAME1 = $conn->query($query_NAME1);
if (!$result_NAME1) {
?>
    <script>
        alert("error occured while fetching the data");
    </script>
<?php
    exit();
}

$query_TEAM1="SELECT * FROM BATSMEN WHERE T_ID IN (SELECT T_ID FROM TEAMS WHERE MATCH_ID=101 AND T_NAME IN (SELECT BAT_FIRST FROM MATCHES WHERE MATCH_ID=101));";
$result_TEAM1 = $conn->query($query_TEAM1);
if (!$result_TEAM1) {
?>
    <script>
        alert("error occured while fetching the data");
    </script>
<?php
    exit();
}

$query_NAME2="SELECT * FROM MATCHES WHERE MATCH_ID=101";
$result_NAME2 = $conn->query($query_NAME2);
if (!$result_NAME2) {
?>
    <script>
        alert("error occured while fetching the data");
    </script>
<?php
    exit();
}

$query_TEAM2="SELECT * FROM BATSMEN WHERE T_ID IN (SELECT T_ID FROM TEAMS WHERE MATCH_ID=101 AND T_NAME IN (SELECT BAT_SECOND FROM MATCHES WHERE MATCH_ID=101));";
$result_TEAM2 = $conn->query($query_TEAM2);
if (!$result_TEAM2) {
?>
    <script>
        alert("error occured while fetching the data");
    </script>
<?php
    exit();
}


// MATCH_INFO

$query_TOTAL_INFO1="SELECT * FROM TEAMS WHERE MATCH_ID=101 AND T_NAME IN(SELECT BAT_FIRST FROM MATCHES WHERE MATCH_ID=101);";
$result_TOTAL_INFO1 = $conn->query($query_TOTAL_INFO1);


if (!$result_TOTAL_INFO1) {
?>
    <script>
        alert("error occured while fetching the data");
    </script>
<?php
    exit();
}

$query_TOTAL_INFO2="SELECT * FROM TEAMS WHERE MATCH_ID=101 AND T_NAME IN(SELECT BAT_SECOND FROM MATCHES WHERE MATCH_ID=101);";
$result_TOTAL_INFO2 = $conn->query($query_TOTAL_INFO2);
if (!$result_TOTAL_INFO2) {
?>
    <script>
        alert("error occured while fetching the data");
    </script>
<?php
    exit();
}


$query_TOTAL_SCORE1="SELECT * FROM TEAMS WHERE MATCH_ID=101 AND T_NAME IN(SELECT BAT_FIRST FROM MATCHES WHERE MATCH_ID=101);";
$result_TOTAL_SCORE1 = $conn->query($query_TOTAL_SCORE1);
if (!$result_TOTAL_SCORE1) {
?>
    <script>
        alert("error occured while fetching the data");
    </script>
<?php
    exit();
}


$query_TOTAL_SCORE2="SELECT * FROM TEAMS WHERE MATCH_ID=101 AND T_NAME IN(SELECT BAT_SECOND FROM MATCHES WHERE MATCH_ID=101);";
$result_TOTAL_SCORE2 = $conn->query($query_TOTAL_SCORE2);
if (!$result_TOTAL_SCORE2) {
?>
    <script>
        alert("error occured while fetching the data");
    </script>
<?php
    exit();
}
?>

<!-- BAT_FIRST -->

<?php
$query_BAT_FIRST ="SELECT * FROM BATSMEN WHERE T_ID IN (SELECT T_ID FROM TEAMS WHERE MATCH_ID=101 AND T_NAME IN (SELECT BAT_FIRST FROM MATCHES WHERE MATCH_ID=101));";

$result_BAT_FIRST = $conn->query($query_BAT_FIRST);
if (!$result_BAT_FIRST) {
?>
    <script>
        alert("error occured while fetching the data");
    </script>
<?php
    exit();
}
?>

<!-- BALL_FIRST -->

<?php
$query_BALL_FIRST="SELECT * FROM BOWLERS WHERE T_ID IN (SELECT T_ID FROM TEAMS WHERE MATCH_ID=101 AND T_NAME IN (SELECT BAT_SECOND FROM MATCHES WHERE MATCH_ID=101));";
$result_BALL_FIRST = $conn->query($query_BALL_FIRST);
if (!$result_BALL_FIRST) {
?>
    <script>
        alert("error occured while fetching the data");
    </script>
<?php
    exit();
}
?>

<!-- BAT_SECOND -->



<?php
$query_BAT_SECOND ="SELECT * FROM BATSMEN WHERE T_ID IN (SELECT T_ID FROM TEAMS WHERE MATCH_ID=101 AND T_NAME IN (SELECT BAT_SECOND FROM MATCHES WHERE MATCH_ID=101));";

$result_BAT_SECOND = $conn->query($query_BAT_SECOND);
if (!$result_BAT_SECOND) {
?>
    <script>
        alert("error occured while fetching the data");
    </script>
<?php
    exit();
}
?>

<!-- BALL_SECOND -->

<?php
$query_BALL_SECOND="SELECT * FROM BOWLERS WHERE T_ID IN (SELECT T_ID FROM TEAMS WHERE MATCH_ID=101 AND T_NAME IN (SELECT BAT_FIRST FROM MATCHES WHERE MATCH_ID=101));";
$result_BALL_SECOND = $conn->query($query_BALL_SECOND);
if (!$result_BALL_SECOND) {
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
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;900&family=Ubuntu:wght@300&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/style_match.css">
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

    <div class="container top">
      <h2>Australia vs India, 2nd T20I - Cricket Score</h2>
    </div>

<!-- BAT_FIRST -->


  <div class="container pl-5 pr-5 mt-5">
    <!-- pr-5 mt-5 -->

      <div class="row disp">
        <?php while ($row_TOTAL_SCORE1 = $result_TOTAL_SCORE1->fetch_assoc())
        {
        ?>
        <div class="col display"><?php echo $row_TOTAL_SCORE1['T_NAME'];?> Innings</div>
        <div class="col display right"><?php echo $row_TOTAL_SCORE1['TOTAL_RUNS'];?>
        -
        <?php echo $row_TOTAL_SCORE1['TOTAL_WICKETS'];?>
        (<?php echo $row_TOTAL_SCORE1['OVERS_PLAYED'];?>)
        </div>
        <?php
        }
         ?>
       </div>

      <table class="table">
          <thead class="thead-light">
              <tr>
                  <th scope="col">NAME</th>
                  <th class="right" scope="col">RUNS</th>
                  <th class="right" scope="col">BALLS</th>
                  <th class="right" scope="col">4'S</th>
                  <th class="right" scope="col">6'S</th>
                  <th class="right" scope="col">STRIKE RATE</th>
              </tr>
          </thead>
          <tbody>
              <?php
              while ($row_BAT_FIRST = $result_BAT_FIRST->fetch_assoc()) {
              ?>
                  <tr>
                      <td><?php echo $row_BAT_FIRST['BT_NAME']; ?></td>
                      <td class="right"><?php echo $row_BAT_FIRST['RUNS_SCORED']; ?></td>
                      <td class="right"><?php echo $row_BAT_FIRST['BOWLS']; ?></td>
                      <td class="right"><?php echo $row_BAT_FIRST['FOURS']; ?></td>
                      <td class="right"><?php echo $row_BAT_FIRST['SIXES']; ?></td>
                      <td class="right"><?php echo $row_BAT_FIRST['ST_RATE']; ?></td>
                  </tr>
              <?php
              }
              ?>
          </tbody>
      </table>

    </div>

    <div class="container extras">
      <div class="row row_col_2">
        <?php while ($row_TOTAL_INFO1 = $result_TOTAL_INFO1->fetch_assoc())
       {
       ?>
          <div class="col info">Extras</div>
          <div class="col info right"><?php echo $row_TOTAL_INFO1['EXTRAS_GOT'];?>
          <?php
          }
           ?>
           (b 0, lb 1, w 8, nb 0, p 0)
         </div>
       </div>
     </div>
  <br><br><br><br>
  <!-- BALL_FIRST -->

  <div class="container pl-5">
    <!-- pr-5 mt-5 -->
      <table class="table">
          <thead class="thead-light">
              <tr>
                  <th scope="col">NAME</th>
                  <th class="right" scope="col">OVERS</th>
                  <th class="right" scope="col">RUNS</th>
                  <th class="right" scope="col">WICKETS</th>
                  <th class="right" scope="col">ECONOMY</th>
              </tr>
          </thead>
          <tbody>
              <?php
              while ($row_BALL_FIRST = $result_BALL_FIRST->fetch_assoc()) {
              ?>
                  <tr>
                      <td><?php echo $row_BALL_FIRST['BW_NAME']; ?></td>
                      <td class="right"><?php echo $row_BALL_FIRST['OVERS_BOWLED']; ?></td>
                      <td class="right"><?php echo $row_BALL_FIRST['RUNS_GOT']; ?></td>
                      <td class="right"><?php echo $row_BALL_FIRST['WICKETS_TAKEN']; ?></td>
                      <td class="right"><?php echo $row_BALL_FIRST['ECNO']; ?></td>
                  </tr>
              <?php
              }
              ?>
          </tbody>
      </table>
  </div>

  <br><br><hr><br><br>

  <!-- BAT_SECOND -->

  <div class="container pl-5 pr-5 mt-5">
     <!-- pr-5 mt-5 -->

     <div class="row disp">
       <?php while ($row_TOTAL_SCORE2 = $result_TOTAL_SCORE2->fetch_assoc())
       {
       ?>
       <div class="col display"><?php echo $row_TOTAL_SCORE2['T_NAME'];?> Innings</div>
       <div class="col display right"><?php echo $row_TOTAL_SCORE2['TOTAL_RUNS'];?>
       -
       <?php echo $row_TOTAL_SCORE2['TOTAL_WICKETS'];?>
       (<?php echo $row_TOTAL_SCORE2['OVERS_PLAYED'];?>)
       </div>
       <?php
       }
        ?>
     </div>

      <table class="table">
          <thead class="thead-light">
              <tr>
                  <th scope="col">NAME</th>
                  <th class="right" scope="col">RUNS</th>
                  <th class="right" scope="col">BALLS</th>
                  <th class="right" scope="col">4'S</th>
                  <th class="right" scope="col">6'S</th>
                  <th class="right" scope="col">STRIKE RATE</th>
              </tr>
          </thead>
          <tbody>
              <?php
              while ($row_BAT_SECOND = $result_BAT_SECOND->fetch_assoc()) {
              ?>
                  <tr>
                      <td><?php echo $row_BAT_SECOND['BT_NAME']; ?></td>
                      <td class="right"><?php echo $row_BAT_SECOND['RUNS_SCORED']; ?></td>
                      <td class="right"><?php echo $row_BAT_SECOND['BOWLS']; ?></td>
                      <td class="right"><?php echo $row_BAT_SECOND['FOURS']; ?></td>
                      <td class="right"><?php echo $row_BAT_SECOND['SIXES']; ?></td>
                      <td class="right"><?php echo $row_BAT_SECOND['ST_RATE']; ?></td>
                  </tr>
              <?php
              }
              ?>
          </tbody>
      </table>
  </div>
  <div class="container extras">
      <div class="row row_col_2">
          <?php while ($row_TOTAL_INFO2 = $result_TOTAL_INFO2->fetch_assoc())
          {
          ?>
          <div class="col info">Extras</div>
          <div class="col info right"><?php echo $row_TOTAL_INFO2['EXTRAS_GOT'];?>
          <?php
          }
           ?>
           (b 0, lb 1, w 2, nb 1, p 0)
         </div>
       </div>
     </div>
     <br><br><br><br>
  <!-- BALL_SECOND -->

  <div class="container pl-5 ">
    <!-- pr-5 mt-5 -->
      <table class="table">
          <thead class="thead-light">
              <tr>
                  <th scope="col">NAME</th>
                  <th class="right" scope="col right">OVERS</th>
                  <th class="right" scope="col right">RUNS</th>
                  <th class="right" scope="col right">WICKETS</th>
                  <th class="right" scope="col right">ECONOMY</th>
              </tr>
          </thead>
          <tbody>
              <?php
              while ($row_BALL_SECOND = $result_BALL_SECOND->fetch_assoc()) {
              ?>
                  <tr>
                      <td><?php echo $row_BALL_SECOND['BW_NAME']; ?></td>
                      <td class="right"><?php echo $row_BALL_SECOND['OVERS_BOWLED']; ?></td>
                      <td class="right"><?php echo $row_BALL_SECOND['RUNS_GOT']; ?></td>
                      <td class="right"><?php echo $row_BALL_SECOND['WICKETS_TAKEN']; ?></td>
                      <td class="right"><?php echo $row_BALL_SECOND['ECNO']; ?></td>
                  </tr>
              <?php
              }
              ?>
          </tbody>
      </table>
  </div>


  <!-- match info -->

  <div class="container pl-5 pr-5 mt-5">
     <!-- pr-5 mt-5 -->
     <div class="row disp">
       <div class="col display">Match Info</div>
    </div>
      <table class="table">
        <tr>
            <td>Match</td>
            <td>Australia vs India, 1st T20I</td>
        </tr>
        <?php
        while ($row_INFO = $result_INFO->fetch_assoc()) {
        ?>
        <tr>
          <td>Date</td>
          <td><?php echo $row_INFO['DATE_OF_MATCH']; ?></td>
        </tr>
        <tr>
          <td>Toss</td>
          <td><?php echo $row_INFO['TOSS']; ?></td>
        </tr>
        <?php
        }
        while ($row_VENUE = $result_VENUE->fetch_assoc()) {
        ?>
        <tr>
          <td>Venue</td>
          <td><?php echo $row_VENUE['STADIUM_NAME']; ?>, <?php echo $row_VENUE['PLACE']; ?></td>
        </tr>
        <?php
        }
        while ($row_NAME1 = $result_NAME1->fetch_assoc()) {
        ?>
        <tr>
          <td><?php echo $row_NAME1['BAT_FIRST']; ?></td>
          <td>
          <?php
            while ($row_TEAM1 = $result_TEAM1->fetch_assoc()) {
             echo $row_TEAM1['BT_NAME'];?>, <?php
           }?>
          </td>
        </tr>
        <?php
        }
        while ($row_NAME1 = $result_NAME1->fetch_assoc()) {
        ?>
        <tr>
          <td><?php echo $row_NAME1['BAT_FIRST']; ?></td>
          <td>
          <?php
            while ($row_TEAM1 = $result_TEAM1->fetch_assoc()) {
             echo $row_TEAM1['BT_NAME'];?>, <?php
           }?>
          </td>
        </tr>
        <?php
        }
        while ($row_NAME1 = $result_NAME1->fetch_assoc()) {
        ?>
        <tr>
          <td><?php echo $row_NAME1['BAT_FIRST']; ?></td>
          <td>
          <?php
            while ($row_TEAM1 = $result_TEAM1->fetch_assoc()) {
             echo $row_TEAM1['BT_NAME'];?>, <?php
           }?>
          </td>
        </tr>
        <?php
        }
        while ($row_NAME2 = $result_NAME2->fetch_assoc()) {
        ?>
        <tr>
          <td><?php echo $row_NAME2['BAT_SECOND']; ?></td>
          <td>
          <?php
            while ($row_TEAM2 = $result_TEAM2->fetch_assoc()) {
             echo $row_TEAM2['BT_NAME'];?>, <?php
           }?>
          </td>
        </tr>
        <?php
        }
        ?>
      </table>
  </div>

</div>
</body>

</html>
