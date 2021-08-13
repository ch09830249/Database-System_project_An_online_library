<?php
	session_start();
	$host = 'localhost';
	$user = 'root';
	$passwd = '';
	$database = 'books';
	$link = mysqli_connect($host, $user, $passwd, $database);
	mysqli_select_db($link,$database);
	mysqli_query($link,"SET NAMES 'utf8';");
	$borrower1=$_POST['borrower'];
	$selectSql="SELECT * FROM borrower WHERE username = '$borrower1'";
	$result = mysqli_query($link,$selectSql);
	$row_num = mysqli_num_rows($result);
	if($row_num == 0){
		header("Location: logfail.php");
	}else{
		$_SESSION['user']= $borrower1;
		$Row = mysqli_fetch_row($result);
		$_SESSION['userid'] = $Row[0];
		header("Location: logsuccessful.php");
	}
?>