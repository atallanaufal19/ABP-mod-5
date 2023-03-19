<!DOCTYPE html>
<html>
<head>
	<title>Contoh PHP dengan Metode GET</title>
</head>
<body>
	<form method="get" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
		Name: <input type="text" name="name"><br>
		Email: <input type="text" name="email"><br>
		<input type="submit" name="submit" value="Submit">
	</form>

	<?php
		if ($_SERVER["REQUEST_METHOD"] == "GET") {
			$name = $_GET["name"];
			$email = $_GET["email"];
			if (empty($name)) {
				echo "Name is empty";
			} else {
				echo "Hello, " . $name . "<br>";
			}
			if (empty($email)) {
				echo "Email is empty";
			} else {
				echo "Your email is: " . $email . "<br>";
			}
		}
	?>
</body>
</html>