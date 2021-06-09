<?php
$conn = new mysqli("localhost", "root", "", "scoreboard");

// Check connection
if ($conn->connect_errno) {
    echo "Failed to connect to MySQL: " . $conn->connect_error;
    exit();
}


$query_FEATURED="SELECT * FROM FEATURED_MATCHES";
$result_FEATURED = $conn->query($query_FEATURED);
if (!$result_FEATURED) {
?>
    <script>
        alert("error occured while fetching the data");
    </script>
<?php
    exit();
}

$query_RM="SELECT * FROM RECENT_MATCHES";
$result_RM = $conn->query($query_RM);
if (!$result_RM) {
?>
    <script>
        alert("error occured while fetching the data");
    </script>
<?php
    exit();
}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Recent Matches</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;900&family=Ubuntu:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/stylee_upcoming.css">
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
    <br><br>
    <div class="container score">
      <div class="row">
        <div class="col details">
        <table class="tab">
          <tr>
            <td>
              <table>
              <tr>
                <td><h3>_____________________________________</h3></td>
              </tr>
              <?php
              while ($row_FEATURED= $result_FEATURED->fetch_assoc()) {
              ?>
              <tr>
                <td><h3><?php echo $row_FEATURED['MATCH_NAME']; ?></h3></td>
              </tr>
              <tr>
                <td>
                  <div class="row">
                    <div class="col">
                     <p><?php echo $row_FEATURED['TEAM1']; ?></p>
                    </div>
                    <div class="col">
                     <p><?php echo $row_FEATURED['TEAM2']; ?></p>
                    </div>
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                <?php echo $row_FEATURED['DATE_OF_MATCH']; ?>
                </td>
              </tr>
              <tr>
              <?php
                $V_ID=$row_FEATURED['V_ID'];
                $query = "SELECT * FROM VENUE WHERE V_ID = '{$V_ID}'";
                $result_VENUE = mysqli_query($conn, $query);
                if (!$result_VENUE) {
                ?>
                <script>
                  alert("error occured while fetching the data");
                </script>
                <?php
                exit();
                }

                if (!$result_VENUE) {
                ?>
                <script>
                alert("error occured while fetching the data");
                </script>
                <?php
                exit();
                }
                while ($row_VENUE = $result_VENUE->fetch_assoc()) {
                ?>
                <td>
                <?php echo $row_VENUE['STADIUM_NAME']; ?>, <?php echo $row_VENUE['PLACE']; ?>
                </td>
                <?php
                }
                ?>
              </tr>
              <tr>
                <td><h3>_____________________________________</h3></td>
              </tr>
              <?php
              }
              ?>
              </table>
            </td>
          </tr>
        </table>
        </div>
      </div>
      <div class="row">
          <div class="col details right">
            <table class="bor">
              <thead class="thead-light">
                  <tr class="bor">
                      <th class="bor">Team</th>
                      <th class="cent bor">Total Upcoming Matches</th>
                  </tr>
              </thead>
              <tbody>
                  <?php
                  while ($row_RM = $result_RM->fetch_assoc()) {
                  ?>
                      <tr>
                          <td class="bor"><?php echo $row_RM['TEAM_NAME']; ?></td>
                          <td class="cent bor"><?php echo $row_RM['MATCHES']; ?></td>
                      </tr>
                  <?php
                  }
                  ?>
              </tbody>
            </table>
          </div>
        </div>
    </div>
    
    
    </div>
  </body>
</html>