<?php include('contactsave.php') ?>

<!DOCTYPE html>
<html>
<head>

<style>
body {
  background-image:url(bookstore.jpg);
}

/* Style inputs */
input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

button[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  cursor: pointer;
}

button[type=submit]:hover {
  background-color: #45a049;
}

/* Style the container/contact section */
.container {
  border-radius: 5px;
  background-image:url(topmain.jpg);
  color:white;
  padding: 10px;
  margin:10px 300px 100px 300px;
}

.form {
  margin: 0 auto;
  width: 50%;
  margin-top: 6px;
  padding: 20px;

}

#submit{
	border-radius:20px;
	margin-left:200px;
}

#home{
	text-decoration:none;
	background-color:#ffcc;
	color:black;
	padding:10px;
	
}

.error {
  width: 92%; 
  margin: 0px auto; 
  padding: 10px; 
  border: 1px solid #a94442; 
  color: #a94442; 
  background: #f2dede; 
  border-radius: 5px; 
  text-align: left;
}
</style>
</head>
<body>

<div class="container">
	<a href="index.php" id="home"><i>Home</i></a>
    <h2 style="font-family:Lucida Calligraphy; font-size:50px; text-align:center;">Contact</h2>
    <p style="text-align:center;">I would love to hear on how you like/dislike the Online Book Store.
	Submit this small form if you have any queries or complaints. 
	Ideas and suggestions are welcome.</p>
	<hr> 
    <div class="form">
      <form action="contact.php" method="post">
		<?php include('errors.php'); ?>
        <label for="fname">First Name <span style="color:red">*</span></label>
        <input type="text" id="fname" name="firstname" placeholder="Your name..">
        <label for="lname">Last Name <span style="color:red">*</span></label>
        <input type="text" id="lname" name="lastname" placeholder="Your last name..">
        <label for="state">State <span style="color:red">*</span></label>
        <select id="state" name="state">
          <option value="Tamil Nadu">Tamil Nadu</option>
          <option value="Kerela">Kerela</option>
          <option value="Karnataka">Karnataka</option>
		  <option value="Other">Other</option>
        </select> 	
        <label for="subject">Feedback <span style="color:red">*</span></label>
        <textarea id="subject" name="feedback" placeholder="Write something..." style="height:170px"></textarea>
		<p><span style="color:red">* - Required</span></p>
        <button type="submit" name="submit" id="submit">Submit</button>
      </form>
  </div>
</div>

</body>
</html>
