<?php include('register.php');?>
<!DOCTYPE html>
<html>
<head>
<title>Register</title>
<style>
body {
  font-family: Lucida Calligraphy;
  background-image:url(bookstore.jpg) ;
}

/* Add padding to containers */
.container {
  padding: 15px;
  margin:0px 450px 20px 450px;
  background-image: url(topmain.jpg);
  color:white;

}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 95%;
  padding: 10px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #4CAF50;
  border-radius:30px;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}

#home{
	text-decoration:none;
	background-color:#ffcc;
	color:black;
	padding:17px 10px 10px 10px;
	font-family:sans;
}
</style>
</head>
<body>

<form action="register.php" method="post">
  <div class="container">
	<?php  if (count($errors) > 0) : ?>
  <div class="error">
  	<?php foreach ($errors as $error) : ?>
  	  <p><?php echo $error ?></p>
  	<?php endforeach ?>
  </div>
<?php  endif ?>
	<a href="Online Book Store.html" id="home"><i>Home</i></a>
    <h1 style="text-align:center">Register</h1>
    <p style="text-align:center">Please fill in this form to create an account.</p>
    <hr>
	<form action="register.php" method="post">
    <label for="email"><b>Email</b></label>
    <input style="border-radius:30px;" type="text" placeholder="Enter Email" name="email" required>

    <label for="psw"><b>Password</b></label>
    <input style="border-radius:30px;" type="password" placeholder="Enter Password" name="psw" required>

    <label for="pswrepeat"><b>Repeat Password</b></label>
    <input style="border-radius:30px;" type="password" placeholder="Repeat Password" name="pswrepeat" required>
    <hr>

    <button type="submit" class="registerbtn" name="create">Register</button></form>
  </div>
  
  <div class="container signin">
    <p>Already have an account? <a href="loginpage.html">Sign in</a>.</p>
  </div>
</form>

</body>
</html>
