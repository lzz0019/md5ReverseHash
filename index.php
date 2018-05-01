 <!DOCTYPE html>
 <html>
 <head>
 	<title>Li Zhang MD5</title>
 </head>
 <body>
 	<h1>MD5 cracker</h1>
 	<p>This application takes an MD5 hash of a four digit pin and check all 10,000 possible four digit PINs to determine the PIN.</p>
 	<pre>Debug Output:</pre>
 	<?php
 		$starttime = microtime(true);
 		$result = ""; 
 		if (!isset($_GET['submit'])) {
 			echo "<p>PIN: Not found</p>";
 		}else{
 			$md5=$_GET['md5'];
 			echo "<pre>";
 			for($i=0000;$i<=9999;$i++){
 				if ($i<15) {
 					echo md5(sprintf("%04d",$i))." ".sprintf("%04d",$i)."<br>";
 				}
 				if (md5(sprintf("%04d",$i))==$md5) {   
 					$result = sprintf("%04d",$i);
 					break;
 				}
 			}
 			echo "</pre>";
 			$endtime = microtime(true);
			$ellapsedTime = $endtime - $starttime;
 			echo "<pre>Ellapsed time: ".$ellapsedTime."</pre>";
 			if($result == ""){
 				echo "<p>PIN: Not found</p>";

 			}else{
 				echo "<p>PIN: ".$result."</p>";
 			}
 		}
 		
 	?>
 	<form action="index.php" method="get">
 		<input type="text" name="md5" size="50" value="<?php if(isset($_GET['md5'])) echo $_GET['md5']; ?>" />
 		<input type="submit" name="submit" value="Crack MD5"/>
 	</form>
 	<ul>
 		<li><a href="index.php">Reset this page</a></li>
 		<li><a href="makepin.php">Make an MD5 PIN</a></li>
 		<li><a href="md5.php">MD5 Encoder</a></li>
 		<li><a href="https://www.wa4e.com/assn/crack/" target="_blank">Specification for this assignment</a></li>
 		<li><a href="https://github.com/lzz0019/md5ReverseHash" target="_blank">Source code similar to this application</a></li>
 	</ul>
 </body>
 </html>