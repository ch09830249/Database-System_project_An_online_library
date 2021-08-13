<?php
	$host = 'localhost';
	$user = 'root';
	$passwd = '';
	$database = 'books';
	$link = mysqli_connect($host, $user, $passwd, $database);
	mysqli_select_db($link,$database);
	mysqli_query($link,"SET NAMES 'utf8';");
	$bookname=$_POST['bookname'];
	if( $bookname != NULL ){
		$deleteSql="DELETE FROM books WHERE bookname = '$bookname' ";
		$result = mysqli_query($link,$deleteSql);
		echo "$bookname";
		header('Location: logsuccessful.php');
	}else{
		header('Location: delfail.php');
	}
?>