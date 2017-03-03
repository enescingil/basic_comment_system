<?php
	date_default_timezone_set('Europe/Istanbul');
	include('dbh.inc.php');
	include('comment.inc.php');
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Comment Section </title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

<img src="titan_destiny.jpg" alt="" width="320px" height="280px">
<?php
echo "<form method='POST' action='".makeComment($conn)."'>
	<input type='hidden' name='uid' value='Anonymous'>
	<input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
	<textarea name='message'></textarea><br>
	<button type='submit' name='commentSubmit'>Comment</button>
</form>";

getComment($conn);
?>

</body>
</html>