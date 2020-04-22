<?php
session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Life's Amazing Secrets</title>
		<link rel = "stylesheet" type = "text/css" href = "design.css" />
		<style>
			form input,textarea{
				margin:15px;
				padding:10px;
				width:34%;
				font-family:Cambria;
				font-size:18px;
				
			}
			form label{
				font-family:Monospace;
				font-size:18px;
				font-weight:bold;
				color:white;
			}
			form{
				background-image:url(topmain.jpg);
				padding:15px;
				margin-right:30%;
			}
			#submit{
				padding: 10px;
				font-size: 15px;
				color: white;
				background: #5F9EA0;
				border: none;
				margin-top:15px;
				border-radius: 5px;
				width:100%;
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
		<script src="jsfile.js"></script>
	</head>
	<body>
		<img id="bgstore" src="http://localhost:8080/IWP PROJECT/IWP PROJECT CODE/bookstore.jpg" alt="Bookstore">
		<div id="topmain">
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
			<img id="bgstorelogo" src="http://localhost:8080\IWP PROJECT\IMAGES\iwpbookstore.png" alt="obslogo">
			<ul>
				<li><a href="index.php"><i class="fa fa-fw fa-home"></i>Home</a></li>
				<li><a href="contact.php"><i class="fa fa-fw fa-envelope"></i>Contact</a></li>
				<li class="dropdown">
				<a class="dropbtn" onClick><i class="fa fa-fw fa-search"></i>Search</a>
				<div class="dropdown-content">
					<a href="searchbn.php">By Book Name</a>
					<a href="searchan.php">By Author Name</a>
					<a href="#">By Year</a>
				</div>
				</li>
				<li><?php  if (isset($_SESSION['username'])) : ?>
    	<p style="position:relative;top:-5px;color:#ffca85;font-family:Lucida Calligraphy;">Welcome <strong><u><?php echo $_SESSION['username']; ?></strong></u></p></li>
		<li><a href="index.php?logout='1'" style="color: #ffca85;"><i class="fa fa-sign-out"></i>Logout</a>
    <?php endif ?></li>
				<li id="time"><h1 id="demo"></h1></li>
			</ul>
		</div><br><br>
		<div class="row">
			<div class="column">
			<img style="margin-left:30px;float:left" src="http://localhost:8080/IWP PROJECT\IMAGES\books\religion\rb2.jpg" alt="Life's Amazing Secrets" width="300">
			</div>
			<div class="column2">
				<h1 style="font-family:Georgia;">Life's Amazing Secrets: How to Find Balance and Purpose in Your Life</h1>
				<h2 style="font-family:Merriweather">by Gaur Gopal Das</h2>
				<h3>Description</h3>
				<p style="font-size:18px">While navigating their way through Mumbai's horrendous traffic, Gaur Gopal Das and his wealthy young friend Harry get talking, delving into concepts ranging from the human condition to finding one's purpose in life and the key to lasting happiness. Whether you are looking at strengthening your relationships, discovering your true potential, understanding how to do well at work or even how you can give back to the world, Gaur Gopal Das takes us on an unforgettable journey with his precious insights on these areas of life. Das is one of the most popular and sought-after monks and life coaches in the world, having shared his wisdom with millions. His debut book, Life's Amazing Secrets, distils his experiences and lessons about life into a light-hearted, thought-provoking book that will help you align yourself with the life you want to live.</p>
				<h2>Buy now: <a href="https://www.amazon.in/gp/product/0143442295/ref=x_gr_w_bb_sout?ie=UTF8&tag=x_gr_w_bb_in-21&linkCode=as2&camp=3626&creative=24790"><button id="submit" style="width:10%;">AMAZON.IN</button></a></h2>
			</div>
		</div>
		<div class="row">
			<div class="column3">
			<h1 style="font-family:Lucida Handwriting;"><u>Reviews</u></h1>
			<?php
				// Create connection
				$conn = new mysqli('localhost', 'root', '', 'onlinebookstore');
				$sql = "SELECT id, name, rating,review FROM rb2";
				$result = $conn->query($sql);
				if ($result->num_rows > 0) {
					// output data of each row
					while($row = $result->fetch_assoc()) {
						echo "<p style='font-family:Cambria;font-size:18px;'>" . "<strong>".$row["name"]."&nbsp&nbsp</strong>". 
						"[".$row["rating"]."/5]"."<br>". $row["review"]. "</p>";
					}
				} else {
					echo "<p style='font-family:Cambria;font-size:18px;'> 0 reviews</p>";
				}
				$conn->close();
				?>
				<div class="form">
					<form action="rb2.php" method="post">
						<?php include('reviewrb2.php')?>
						<?php include('errors.php'); ?>
						<label for="fname">Name: <span style="color:red">*</span></label><br>
						<input type="text" id="name" name="name" placeholder="Your name...">
						<label for="lname">Rating (out of 5): <span style="color:red">*</span></label>
						<input type="text" id="rating" name="rating" placeholder="Your rating..."><br>
						<label for="subject">Review: <span style="color:red">*</span></label><br>	
						<textarea id="subject" name="review" placeholder="Write something..." style="height:100px;width:77%;"></textarea>
						<p><span style="color:red">* - Required</span></p>
						<button type="submit" name="submit" id="submit">Submit</button>
					</form>
				</div>	
			</div>
		</div>
	</body>
</html>