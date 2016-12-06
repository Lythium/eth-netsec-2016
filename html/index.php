<?php
include_once("db.php");
if (isset($_COOKIE['username']) && isset($_COOKIE['password']))
{
	$username = $_COOKIE['username'];
	$pw = $_COOKIE['password'];
	$sql = "SELECT id, username, password FROM users WHERE username='$username' AND password = '$pw' LIMIT 1";
	
	$query = mysqli_query($db_conf, $sql);
        $row = mysqli_fetch_row($query);
	if ($row != NULL) {
		header("location: search.php");
	}
}

if ($_POST != NULL) {
	$user = mysqli_real_escape_string($db_conf, $_POST['user']);
	$pw = sha1($_POST['pw']);
	
	$sql = "SELECT id, username, password FROM users WHERE username='$user' AND password = '$pw' LIMIT 1";
	
	$query = mysqli_query($db_conf, $sql);
        $row = mysqli_fetch_row($query);
	if ($row == NULL) {
		echo "Authentication failed.";
	} else {
		setcookie("id", $row[0], time() + (86400 * 30), "/");
		setcookie("username", $user, time() + (86400 * 30), "/");
    		setcookie("password", $pw, time() + (86400 * 30), "/");
		header("location: search.php");
	}
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include('header.php'); ?>
  </head>

  <body>

    <div class="container">

	<div id="wrapper">
      <form class="form-signin" action="index.php" method="POST">
        <h2 class="form-signin-heading">Please sign in</h2>
        <input type="text" name="user" class="input-block-level" placeholder="Email address">
        <input type="password" name="pw" class="input-block-level" placeholder="Password">
        <label class="checkbox">
          <input type="checkbox" value="remember-me"> Remember me
        </label>
        <button class="btn btn-large btn-primary" type="submit">Sign in</button>
      </form>
	</div>

    </div> <!-- /container -->
  </body>
</html>

