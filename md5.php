<!DOCTYPE html>
<html>
<head>
	<title>Li Zhang MD5</title>
</head>
<body>
	<h1>MD5 Maker</h1>
	<p>MD5: <?php if (isset($_GET['submit'])) {
		$encode = $_GET['encode'];
		echo md5($encode);
	}else{
		echo "Not computed";
	}
	?>
	</p>
	<form action="md5.php" method="get">
		<input type="text" name="encode" size="40"/>
		<input type="submit" name="submit" value="Compute MD5"/>
	</form>
	<ul>
		<li><a href="md5.php">Reset</a></li>
		<li><a href="index.php">Back to Cracking</a></li>
	</ul>
</body>
</html>