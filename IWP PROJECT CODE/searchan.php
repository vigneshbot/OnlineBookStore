<?php
session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Search by Author Name</title>
		<link rel = "stylesheet" type = "text/css" href = "design.css" />
		<style>
			#search{
				margin-left:15px;
				padding:20px;
				width:60%;
				border-style:none;
				font-size:16px;
			}
				
			#searchbtn{
				width: 5%;
				padding: 20px;
				margin-left:-10px;
				background: green;
				color: white;
				font-size: 17px;
				border: 1px solid grey;
				border-left: none; /* Prevent double borders */
				cursor: pointer;
			}

			#searchbtn:hover{
				background: lime;
			}
		</style>
		<script src="jsfile.js"></script>
	</head>
	<body>
		<img id="bgstore" src="http://localhost:8080\IWP PROJECT\IMAGES\bookstore.jpg" alt="Bookstore">
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
		<li><a href="index.php?logout='1'" style="color: #ffca85;"><i class="fa fa-sign-out"></i>Logout</a>
    <?php endif ?></li>
				<li id="time"><h1 id="demo"></h1></li>
			</ul>
		</div>
		<h2 style="font-family: Lucida Calligraphy; padding-top:35px;">Enter the name of an Author: </h2>
		<form method="post" action="searchan.php">
		<input type="text" id="search" name="search" placeholder="Which Author are you looking for?">
		<button type="submit" id="searchbtn" name="searchan" ><i class="fa fa-search"></i></button></form><br><br>
		<div style="margin:20px">
		<?php
				if (isset($_POST['searchan'])) {
				// Create connection
				$conn = new mysqli('localhost', 'root', '', 'books');
				$author =$_POST['search'];
				$sql = "SELECT bookname, imglink,link FROM books WHERE author='$author'";
				$result = $conn->query($sql);
				if ($result->num_rows > 0) {
					// output data of each row
					while($row = $result->fetch_assoc()) {
						echo "<a class='books' href='".$row['link']."'><img style='width:200px;height:300px;' src='".$row["imglink"]."' alt='found'></a>". 
						"<p style='background-color:grey;
	color:white;
	padding:5px 5px 5px 5px;
	margin-top:0px;
	width:13%;
	border-radius:20px;
	font-family:sans-serif;
	text-align:center;'>".$row["bookname"]."<br>". "</p>"."<br>";
					}
				} else {
					echo "<p style='font-family:Cambria;font-size:18px;'> 0 books found</p>";
				}
				$conn->close();
				}
				?>
		</div>
		</body>
</html>
