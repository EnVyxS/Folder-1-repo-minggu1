<html>
<head>
	<title>Weaponry.ru</title>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=email], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
.report{
	float: left;
	width: 100%;
	margin: 10px;
	background-color: green;
	color: white;
	font-weight: bold;
	height: 30px;
	padding: 6px;
	text-align: center;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}

* {  box-sizing: border-box;
}
body {
  margin: 0;}
/* Style the header */
.header {
  background-color: #f1f1f1;
  padding: 20px;
  text-align: center;
}
/* Style the top navigation bar */
.topnav {
  overflow: hidden;
  background-color: #333;
}
/* Style the topnav links */
.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

</style>
</head>


<body>
<div class="header">
<h1>Welcome to Weaponry.ru</h1>
  <p>We are Selling Any weapon for much cheaper then else website<br>100% Trusted,2 days guarantee after purchase<br>and 
	can be delivered anywhere, including battlefields such as (Gaza, Afghanistan, etc.)</p>
</div>

<div class="topnav">
	<a href="http://localhost/Project/index.php#">Home</a>
	<a href="#">Firearms</a>
	<a href="#">Megazines</a>
	<a href="#">Parts&Accessories</a>
	<a href="#">Customize</a>
	<a href="#">Competition</a>
	<a href="#">Concelment</a>
	<a href="#">Holsters</a>
	<a href="#">Apparel&Gear</a>
	<a href="#">Misc</a>
	<a href="Suggestion.php">Suggestion</a>
	<a href="http://localhost/Project/tank.php#">Armored Car&Tank</a>
</div>

<div class="container">
	<h2 align ="center" class="menu">Guest Book</h2>
	
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "projek";


if (isset($_GET['submit'])){
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	$sql = "INSERT INTO guest_book (nama, alamat, hp, email, mengetahui_dari, saran)
	VALUES ('".$_GET['name']."', '".$_GET['address']."', '".$_GET['phone']."', '".$_GET['email']."', '".$_GET['mengetahui_dari']."', '".$_GET['suggestion']."')";


	if ($conn->query($sql) === TRUE) {
		echo '
			<div class="row">
				<div class="report">
					Thanks For Your Responsive
				</div>
			</div>
		';
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
}
?>
<form action="Guest_Book2.php">
	<table>
		<div class="row">
		<div class="col-25">
			<label for="name">Name</label>
		</div>
		<div class="col-75">
			<input type="text" id="name" name="name" placeholder="Your Name">
		</div>
	</div>
	</table>
	
	<div class="row">
		<div class="col-25">
			<label for = "address">Address</label>
		</div>
		<div class = "col-75">
			<textarea id = "address" name = "address" placeholder = "Address" style="hight:200px"></textarea>
		</div>
	</div>
	
	<div class="row">
		<div class="col-25">
			<label for="phone">Phone Number</label>
		</div>
		<div class="col-75">
			<input type = "text" id = "phone" name = "phone" placeholder = "08xxxxxxxxxxxx">
		</div>
	</div>
	
	<div class="row">
		<div class="col-25">
			<label for="email">Email</label>
		</div>
		<div class="col-75">
			<input type="email" id="email" name="email" placeholder="Your Email">
		</div>
	</div>
	
	<div class="row">
		<div class="col-25">
			<label for="subject">Whare Do You Find Our Website</label>
		</div>
		<div class="col-75">
			<select id = "mengetahui_dari" name = "mengetahui_dari">
				<option value = social_media>Social Media</option>
				<option value = darknet>Darknet</option>	
				<option value = Teman_atau_kerabat>Friends/Relatives</option>	
				<option value = iklan>Advertisement</option>	
			</select>
		</div>
	</div>
	
	<div class="row">
		<div class="col-25">
			<label for = "suggestion">Suggestion</label>
		</div>
		<div class = "col-75">
			<textarea id = "suggestion" name = "suggestion" placeholder = "suggestion" style="hight:200px"></textarea>
		</div>
	</div>
	
	<div class = "row">
		<input type = "submit" name = "submit" value = "Submit">
	</div>
</body>
</html>