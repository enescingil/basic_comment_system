<?php

function makeComment($conn) {
	if(isset($_POST['commentSubmit'])){
		$uid = $_POST['uid'];
		$date = $_POST['date'];
		$message = $_POST['message'];

		$sql = "INSERT INTO comment (uid, date, message) VALUES ('$uid', '$date', '$message')";
		$result = $conn->query($sql);
	}
}

function getComment($conn){
	$sql = "SELECT * FROM comment";
	$result = $conn->query($sql);
	while ($row = $result->fetch_assoc()){
		echo "<div class='comment-box'><p>";
			echo $row['uid']."<br>";
			echo $row['date']."<br>";
			echo $row['message']."<br>";
		echo "</p>
				<form class='edit-btn' method='POST' action='".deleteComment($conn)."'>
					<input type='hidden' name='id' value='".$row['cid']."'>
					<button type = 'submit' name='commentDelete'>Delete</button>
				</form>
			</div>";
	}
}

function deleteComment($conn){
	if (isset($_POST['commentDelete'])) {
		$cid = $_POST['cid'];
		
		$sql = "DELETE FROM comment WHERE cid='$cid'";
		$result = $conn->query($sql);
	}
}
