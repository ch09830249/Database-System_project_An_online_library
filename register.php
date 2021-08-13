<?php
	$host = 'localhost';
	$user = 'root';
	$passwd = '';
	$database = 'books';
	$link = mysqli_connect($host, $user, $passwd, $database);
	mysqli_select_db($link,$database);
	mysqli_query($link,"SET NAMES 'utf8';");
	$selectSql="SELECT * FROM borrower";
	$result1 = mysqli_query($link,$selectSql);
	$username=$_POST['username'];
	$email=$_POST['email'];
	$tel=$_POST['tel'];
	$address=$_POST['address'];
	$selectsql1 = "SELECT MAX(userid) FROM borrower";
	$result2 = mysqli_query($link,$selectsql1);
	$row = mysqli_fetch_row($result2);
	$num_rows = $row[0]+1;
	if( $username != NULL && $email != NULL && $tel != NULL && $address != NULL ){
		$insertuserSql="INSERT INTO borrower VALUES('$num_rows','$username','$email','$tel','$address')";
		$result = mysqli_query($link,$insertuserSql);
		header('Location: index.php');
	}else{
		header('Location: registerpagefail.php');
	}
		
?>