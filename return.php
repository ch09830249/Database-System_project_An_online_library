<?php
	$BID = $_GET['BookID'];
	$host = 'localhost';
	$user = 'root';
	$passwd = '';
	$database = 'books';
	$link = mysqli_connect($host, $user, $passwd, $database);
	mysqli_select_db($link,$database);
	mysqli_query($link,"SET NAMES 'utf8';");
	$updateSql="UPDATE books SET userid = NULL , duedate = NULL  WHERE bookid = $BID ";
	$result = mysqli_query($link,$updateSql);
	$selectSql="SELECT bookname FROM books WHERE bookid = $BID ";
	$result1 = mysqli_query($link,$selectSql);
	$Row = mysqli_fetch_row($result1);
	$_SESSION["bookname"] = $Row[0];
	header("Location: returnpage1.php");
?>