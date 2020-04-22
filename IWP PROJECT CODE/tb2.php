<?php
session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Internet and Web</title>
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
			<img style="margin-left:30px;float:left" src="http://localhost:8080/IWP PROJECT\IMAGES\books\textbooks\tb2.jpg" alt="Internet and Web" width="300">
			</div>
			<div class="column2">
				<h1 style="font-family:Georgia;">Internet & World Wide Web: How to Program</h1>
				<h2 style="font-family:Merriweather">by Paul Deitel, Harvey Deitel</h2>
				<h3>Description</h3>
				<p style="font-size:18px">For a wide variety of Web Programming, XHTML, and JavaScript courses found in Computer Science, CIS, MIS, IT, Business, Engineering, and Continuing Education departments. Internet and World Wide Web How to Program, 4e introduces students with little or no programming experience to the exciting world of Web-Based applications. The book has been substantially revised to reflect today's Web 2.0 rich Internet application-development methodologies. A comprehensive book that teaches the fundamentals needed to program on the Internet, this text provides in-depth coverage of introductory programmming principles, various markup languages (XHTML, Dynamic HTML and XML), several scripting languages (JavaScript, PHP, Ruby/Ruby on Rails and Perl); AJAX, web services, Web Servers (IIS and Apache) and relational databases (MySQL/Apache Derby/Java DB) -- all the skills and tools needed to create dynamic Web-based applications. The text contains comprehensive introductions to ASP.NET 2.0 and JavaServer Faces (JSF). Hundreds of live-code examples of real applications throughout the book available for download allow readers to run the applications and see and hear the outputs.The book provides instruction on building Ajax-enabled rich Internet applications that enhance the presentation of online content and give web applications the look and feel of desktop applications. The chapter on Web 2.0 and Internet business exposes readers to a wide range of other topics associated with Web 2.0 applications and businesses After mastering the material in this book, students will be well prepared to build real-world, industrial strength, Web-based applications.</p>
				<h2>Buy now: <a href="https://www.amazon.in/gp/product/0131752421/ref=x_gr_w_bb_sout?ie=UTF8&tag=x_gr_w_bb_in-21&linkCode=as2&camp=3626&creative=24790"><button id="submit" style="width:10%;">AMAZON.IN</button></a></h2>
			</div>
		</div>
		<div class="row">
			<div class="column3">
			<h1 style="font-family:Lucida Handwriting;"><u>Reviews</u></h1>
			<?php
			
				$conn = new mysqli('localhost', 'root', '', 'onlinebookstore');
				$sql = "SELECT id, name, rating,review FROM tb2";
				$result = $conn->query($sql);
				if ($result->num_rows > 0) {
					
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
					<form action="tb2.php" method="post">
						<?php include('reviewtb2.php')?>
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