<?php

include 'databuy.php';

if(isset($_POST['done'])){

 $username = $_POST['name'];
 $email = $_POST['email'];
 $phone = $_POST['phone'];
  $item = $_POST['item'];
 $location = $_POST['location'];
 $date = $_POST['date'];
 $description = $_POST['description'];

 $q = "INSERT INTO `tranport`(`name`, `email`, `phone`, `item`, `location`, `date`, `description`) VALUES ('$username','$email','$phone','$item','$location','$date','$description')";
 $query = mysqli_query($con,$q);
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>transport</title>
	<style>
		body {
			font-family: Arial, sans-serif;
			background-color: #f2f2f2;
			margin: 0;
			padding: 0;
		}
		form {
			background-color: #fff;
			padding: 20px;
			max-width: 600px;
			margin: 50px auto;
			border-radius: 5px;
			box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
		}
		h1 {
			text-align: center;
			margin-top: 0;
		}
		label {
			display: block;
			margin-bottom: 10px;
		}
		input[type="text"], textarea {
			width: 100%;
			padding: 10px;
			border-radius: 5px;
			border: 1px solid #ccc;
			margin-bottom: 20px;
			box-sizing: border-box;
		}
		textarea {
			height: 100px;
		}
		input[type="submit"] {
			background-color: #4CAF50;
			color: #fff;
			padding: 10px 20px;
			border: none;
			border-radius: 5px;
			cursor: pointer;
			font-size: 16px;
		}
		input[type="submit"]:hover {
			background-color: #3e8e41;
		}
	</style>
</head>
<body>
	<form action="index.php" method="post" enctype="multipart/form-data">
		<h1>transport sharing </h1>
		<label for="name">Your Name:</label>
		<input type="text" id="name" name="name" placeholder="Enter your name" required>

		<label for="email">Your Email:</label>
		<input type="text" id="email" name="email" placeholder="Enter your email" required>

		<label for="phone">Your Phone:</label>
		<input type="text" id="phone" name="phone" placeholder="Enter your phone number">

		<label for="item">means of transport</label>
		<input type="text" id="item" name="item" placeholder="Enter the name of the item" required>

		<label for="location">Location name :</label>
		<input type="text" id="location" name="location" placeholder="mention the location" required>

		<label for="date">Date and time of going:</label>
		<input type="datetime-local" id="date" name="date" placeholder="Mention date and time of going." required>

		<label for="description">other information</label>
		<textarea id="description" name="description" placeholder="please give other info" required></textarea>


        

		<input type="submit" value="Submit" name="done">
	</form>
</body>
</html>