<!DOCTYPE html>
<html>
<head>
	<title>Li Zhang PIN Code</title>
</head>
<body>
	<h1>MD5 PIN Maker</h1>
	<?php 
		if (isset($_GET['submit'])) {
			$pin = $_GET['pin'];
			echo "<p>MD5 value: ".md5($pin)."</p>";
		}
	?>
	<form action="makepin.php" method="get">
		<input type="text" name="pin" value="<?php if (isset($_GET['pin'])) echo $pin;?>" />
		<input type="submit" name="submit" value="Compute MD5 for PIN"/>
	</form>
	<ul>
		<li><a href="makepin.php">Reset this page</a></li>
		<li><a href="index.php">Back to Cracking</a></li>
	</ul>
</body>
</html>