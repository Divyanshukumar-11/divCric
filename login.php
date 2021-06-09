
<?php
$conn = new mysqli("localhost", "root", "", "scoreboard");

// Check connection
if ($conn->connect_errno) {
    echo "Failed to connect to MySQL: " . $conn->connect_error;
    exit();
}
$requestType = $_SERVER['REQUEST_METHOD'];
if ($requestType == 'POST') {
    $usr = $_POST['username'];
    $pwd = $_POST['pwd'];
    if ($usr=="admin" and $pwd==1234) {
      session_start();?>
      <script>
        alert("my laptop is chutiya");
      </script>
      <?php
    header("Location:admin.php");
    exit;
    }
    else{
        ?>
        <script>
            alert("Wrong Credentials");
        </script>
<?php
    }
}
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Log-in</title>
  <script src="https://kit.fontawesome.com/f70a446779.js" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&family=Ubuntu:wght@300&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet" href="css/stylee_login.css">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <link href="css/style.css" rel="stylesheet">
  </head>
  <body class="text-center">
  <script type = "text/javascript" >
        function preventBack() { window.history.forward(1); }
        setTimeout("preventBack()", 0);
        window.onunload = function () { null };
        </script>
    <form class="form-signin" action="" method="POST">
      <h2>Admin Login</h2><br>
      <label for="username" class="sr-only">username</label>
      <input type="text" name="username" class="form-control top" placeholder="username" required>
      <label for="password"  class="sr-only">Password</label>
      <input type="password" name="pwd" class="form-control bottom" placeholder="Password" required>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
    </form>

</body>
</html>
