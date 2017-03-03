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

<?php
$cid = $_POST['cid'];
$uid = $_POST['uid'];
$date = $_POST['date'];
$message = $_POST['message'];

echo "<form method='POST' action='".editComment($conn)."'>
	<input type='hidden' name='uid' value='".$uid."'>
	<input type='hidden' name='date' value='".$date."'>
	<textarea name='message'>".$message."</textarea><br>
	<button type='submit' name='commentSubmit'>Comment</button>
</form>";


?>

</body>
</html>