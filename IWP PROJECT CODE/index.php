<!--17BCE2325 VIGNESH's Online Bookstore System-->

<?php 
  session_start(); 
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Online Book Store</title>
		<link rel = "stylesheet" type = "text/css" href = "design.css" />
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
					<a href="searchy.php">By Year</a>
				</div>
				</li>
				<li><?php  if (isset($_SESSION['username'])) : ?>
    	<p style="position:relative;top:-5px;color:#ffca85;font-family:Lucida Calligraphy;">Welcome <strong><u><?php echo $_SESSION['username']; ?></strong></u></p></li>
		<li><a href="login.php?logout='1'" style="color: #ffca85;"><i class="fa fa-sign-out"></i>Logout</a>
    <?php endif ?></li>
				<li id="time"><h1 id="demo"></h1></li>
			</ul>
		</div>
		<h1 style="font-family: Papyrus"><i class="fa fa-bookmark">&nbsp;</i>Featured Books</h1>	
		<div class="slidingstuff">
			<marquee scrollamount="30" behavior="slide">
				<a href="tb1.php">
				<img class="books" src="http://localhost:8080\IWP PROJECT\IMAGES\books\textbooks\tb1.png" alt="Image Processing" height="300" width="200">
				</a>
				<a href="book2.php">
				<img class="books" src="http://localhost:8080\IWP PROJECT\IMAGES\books\FEATURED\book2.jpg" alt="Thirteen Reasons Why" height="300">
				</a>
				<a href="book3.php">
				<img class="books" src="http://localhost:8080\IWP PROJECT\IMAGES\books\FEATURED\book3.jpg" alt="India 2019" height="300" width="200">
				</a>
				<a href="tb2.php">
				<img class="books" src="http://localhost:8080\IWP PROJECT\IMAGES\books\textbooks\tb2.jpg" alt="Internet and Web" height="300">
				</a>
				<a href="book5.php">
				<img class="books" src="http://localhost:8080\IWP PROJECT\IMAGES\books\FEATURED\book5.jpg" alt="The Alchemist" height="300">
				</a>
				<a href="book6.php">
				<img class="books" src="http://localhost:8080\IWP PROJECT\IMAGES\books\FEATURED\book6.jpg" alt="Wasted in Engineering" height="300">
				</a>
				<a href="book7.php">
				<img class="books" src="http://localhost:8080\IWP PROJECT\IMAGES\books\FEATURED\book7.jpg" alt="The Book Thief" height="300">
				</a>
			</marquee>
		</div>
		<div class="row">
			<div class="column">
				<div class="vertical-menu">
					<a href="#" class="active">Categories</a>
					<a href="fiction.php"><i class="fa fa-book" aria-hidden="true"></i>Fiction</a>
					<a href="nonfiction.php"><i class="fa fa-book" aria-hidden="true"></i>Non-Fiction</a>
					<a href="selfhelp.php"><i class="fa fa-book" aria-hidden="true"></i>Self-Help</a>
					<a href="Education.php"><i class="fa fa-book" aria-hidden="true"></i>Education</a>
				</div>
			</div>
			<div class="column">
				<a href="b1.php">
				<img class="books" src="http://localhost:8080\IWP PROJECT\IMAGES\books\story books\b1.jpg" alt="Tess of the Road" height="300">
				</a>
				<p class="bookname">Tess of the Road</p>
			</div>
			<div class="column">
				<a href="b2.php">
				<img class="books" src="http://localhost:8080\IWP PROJECT\IMAGES\books\story books\b2.jpg" alt="Five Feet Apart" height="300">
				<p class="bookname">Five Feet Apart</p>
			</div>
			<div class="column">
				<a href="b3.php">
				<img class="books" src="http://localhost:8080\IWP PROJECT\IMAGES\books\story books\b3.jpg" alt="All the Light We Cannot See" height="300" width="200">
				</a>
				<p class="bookname">All the Light We Cannot See</p>
			</div>
			<div class="column">
				<a href="b4.php">
				<img class="books" src="http://localhost:8080\IWP PROJECT\IMAGES\books\story books\b4.jpg" alt="This Book Loves You" height="300" width="200">
				</a>
				<p class="bookname">This Book Loves You</p>
			</div>
		</div>
	<body>
</html>