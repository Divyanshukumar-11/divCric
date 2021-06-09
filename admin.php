<?php
$conn = new mysqli("localhost", "root", "", "scoreboard");

// Check connection
if ($conn->connect_errno) {
    echo "Failed to connect to MySQL: " . $conn->connect_error;
    exit();
}
if(isset($_POST['ADD_MATCH']))
{
  
  $sql="CALL  `ADD`('" .$_POST['match']. "', '" .$_POST['team1']. "', '" .$_POST['team2']. "','" .$_POST['v_id']. "', '" .$_POST['date']. "');";
  $res=$conn->query($sql);
?>

<script>
  alert("match is added");
</script>

<?php  
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


// $requestType = $_SERVER['REQUEST_METHOD'];
// if ($requestType == 'POST') {
    // $match = $_POST['match'];
    // $team1 = $_POST['team1'];
    // $team2 = $_POST['team2'];
    // $v_id = $_POST['v_id'];
    // $date = $_POST['date'];
//     $query =  "INSERT INTO FEATURED_MATCHES VALUES('" . $match . "', '" . $team1 . "', '" . $team2 . "','" . $v_id . "', '" . $date . "')";
//     $res = $conn->query($query);
// }
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>admin page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
      <link rel="stylesheet" href="css/stylee_admin.css">
  </head>
  <body>
  <script type = "text/javascript" >
        function preventBack() { window.history.forward(1); }
        setTimeout("preventBack()", 0);
        window.onunload = function () { null };
        </script>
        <a href="logout.php"><button class="btn" type="submit">logout</button></a>
    <div class="main">
      <form class="form-signin" action="admin.php" method="POST">
        <h2>New Featured Match</h2><br>
        <table>
          <tr>
          <td><label for="username" >Match</label></td>
          <td><input type="text" class="form-control top" name="match" required></td>
          </tr>
          <tr>
          <td><label for="username" >First Team</label></td>
          <td><input type="text" class="form-control top" name="team1" required></td>
          </tr>
          <tr>
          <td><label for="username" >Second Team</label></td>
          <td><input type="text" class="form-control top" name="team2" required></td>
          </tr>
          <tr>
          <td><label for="username" >Venue ID</label></td>
          <td><input type="text" class="form-control top" name="v_id" required></td>
          </tr>
          <tr>
          <td><label for="username" >Date</label></td>
          <td><input type="text" class="form-control top" name="date" required></td>
          </tr>
        </table>
        <br>
        <button class="btn btn-lg btn-primary btn-block" name="ADD_MATCH" type="submit">Add the Match</button>
      </form>
    </div>
  </body>
</html>