<?php
session_start();

$firstname = "";
$lastname = "";
$state    = "";
$feedback = "";
$errors = array(); 

$db = mysqli_connect('localhost', 'root', '', 'onlinebookstore');


if (isset($_POST['submit'])) {
  
  $firstname = mysqli_real_escape_string($db, $_POST['firstname']);
  $lastname = mysqli_real_escape_string($db, $_POST['lastname']);
  $state = mysqli_real_escape_string($db, $_POST['state']);
  $feedback = mysqli_real_escape_string($db, $_POST['feedback']);

  if (empty($firstname)) { array_push($errors, "First name is required"); }
  if (empty($lastname)) { array_push($errors, "Last name is required"); }
  if (empty($state)) { array_push($errors, "State is required"); }
  if (empty($feedback)) { array_push($errors, "Feedback is required"); }

  if (count($errors) == 0) {
	  $query = "INSERT INTO contact (firstname, lastname, state, feedback) 
  			  VALUES('$firstname', '$lastname', '$state','$feedback	')";
  	mysqli_query($db, $query);
  	echo "<p style='background-color:black;color:white;padding:10px; margin-right:75em;'>Your feedback has been recorded :)</p>";
  }
}


?>