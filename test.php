<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
</head>

<body>

<?php
	echo htmlentities('a<b>c');
?>
<hr>
<?php

	echo 'PHP_SELF = '.$_SERVER['PHP_SELF'];
?>


</body>
</html>