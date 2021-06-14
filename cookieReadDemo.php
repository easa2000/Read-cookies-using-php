<!DOCTYPE html>
<html>
<head>
	<title>Reading cookies</title>
</head>
<body>
	<?php
	if (isset($_COOKIE['myname'])) {
		echo "<h3>Welcome ".$_COOKIE['myname']. "!!!</h3>";
	}else{
		echo "<h3>Welcome guest</h3>";
	}

	?>

</body>
</html>