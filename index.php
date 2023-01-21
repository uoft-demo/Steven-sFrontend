<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>


<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="styles/styles.css">
  <title>Home</title>



<div class="navbar">
  <a class="active" href="logout.php"> Logout</a>
  <a href="movies.html"></i> MyList</a>
  <a href="series.html"></i> Series</a>
  <a href="movies.html"></i> Movies</a>
</div>

<div class="container">
  <div class="row">
    <div class="col-md-12 text-center">
      <h3 class="animate-charcter"> Hello, <?php echo $user_data['user_name']; ?></h3>
    </div>
  </div>
</div>


</html> 
