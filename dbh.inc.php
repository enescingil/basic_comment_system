<?php

$conn = mysqli_connect('localhost', 'root', '', 'yorumbolumu');

if(!$conn){
	die("Connection failde: ".mysqli_connect_error());;
}
?>