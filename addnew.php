<?php
	$host = 'localhost';
	$user = 'root';
	$passwd = '';
	$database = 'books';
	$link = mysqli_connect($host, $user, $passwd, $database);
	mysqli_select_db($link,$database);
	mysqli_query($link,"SET NAMES 'utf8';");
	$selectSql="SELECT * FROM books";
	$result1 = mysqli_query($link,$selectSql);
	$bookname=$_POST['bookname'];
	$category=$_POST['category'];
	$author=$_POST['author'];
	$selectsql1 = "SELECT MAX(bookid) FROM books";
	$result2 = mysqli_query($link,$selectsql1);
	$row = mysqli_fetch_row($result2);
	$num_rows = $row[0]+1;
	if( $bookname != NULL && $category != NULL && $author != NULL ){
		// 加入資料庫
		$insertuserSql="INSERT INTO books VALUES('$num_rows','$bookname','$category','$author', NULL,NULL)";
		$result = mysqli_query($link,$insertuserSql);
		// 寄信
		$selectsql2 = "SELECT email FROM borrower"; 
		$result3 = mysqli_query($link,$selectsql2);
		while($row2=mysqli_fetch_row($result3)) {
			echo $row2[0];
			$subject = "人工智慧實驗室圖書館有新書上架喔!!!!";
			$body = "新書上架囉   \n\n書名:".$bookname."    \n作者:".$author."    \n分類:".$category."     \n\n歡迎多來AILab Library借閱";
			$headers = "From: AILab Library";
			mail($row2[0], $subject, $body, $headers);
		}
		header('Location: logsuccessful.php');
	}else{
		header('Location: addfail.php');
	}
?>