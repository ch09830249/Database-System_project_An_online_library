<?php
	session_start();
	$BID = $_GET['BookID'];
	$peopleid = $_SESSION["userid"];
	$host = 'localhost';
	$user = 'root';
	$passwd = '';
	$database = 'books';
	$currentdate = date("Y-m-d G:H:s",strtotime(" 7 days 6 hours"));
	echo "$currentdate <br>";
	$link = mysqli_connect($host, $user, $passwd, $database);
	mysqli_select_db($link,$database);
	mysqli_query($link,"SET NAMES 'utf8';");
	$updateSql="UPDATE books SET userid = $peopleid , duedate =  '$currentdate'  WHERE bookid = $BID ";
	$result2 = mysqli_query($link,$updateSql);
	$selectSql="SELECT bookname FROM books WHERE bookid = $BID ";
	$result1 = mysqli_query($link,$selectSql);
	$Row1 = mysqli_fetch_row($result1);
	$_SESSION["bookname"] = $Row1[0];
	header("Location: borrowpage2.php");
?>