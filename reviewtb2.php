<?php

$name = "";
$rating = "";
$review = "";
$errors = array();

$db = mysqli_connect('localhost', 'root', '', 'onlinebookstore');

if (isset($_POST['submit'])) {
  
  $name = mysqli_real_escape_string($db, $_POST['name']);
  $rating = mysqli_real_escape_string($db, $_POST['rating']);
  $review = mysqli_real_escape_string($db, $_POST['review']);

  if (empty($name)) { array_push($errors, "Name is required"); }
  if (empty($rating)) { array_push($errors, "Rating is required"); }
  if ($rating<1 or $rating>5) { array_push($errors, "Please provide rating from 0 to 5"); }
  if (empty($review)) { array_push($errors, "Review is required"); }

  if (count($errors) == 0) {
	  $query = "INSERT INTO tb2 (name, rating, review) 
  			  VALUES('$name', '$rating','$review')";
  	mysqli_query($db, $query);
  	echo "<p style='background-color:black;color:white;padding:10px;'>Your review has been recorded :)</p>";
  }
}


?>