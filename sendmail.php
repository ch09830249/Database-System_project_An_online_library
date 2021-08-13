<html>
	<head><title>AILab Library</title>
		<font size = 7 face="標楷體" color = blue>人工智慧實驗室圖書館<br></font>
	<style>
	.back{
		text-decoration:none; 
		text-decoration:none;
		color: #AA7700;
		PADDING-RIGHT: 2px;
		PADDING-LEFT: 2px;
		PADDING-BOTTOM: 2px;
		PADDING-TOP: 2px;
		background-color:#FFFF33;
		height: 20px;
		width: 120px;
		text-align: center;
		border: #886600;
		border-style: outset;
		border-top-width: 2px;
		border-right-width: 2px;
		border-bottom-width: 2px;
		border-left-width: 2px
	}
    .back:hover { 
		BORDER-RIGHT: #886600 1px outset; PADDING-RIGHT: 2px; BORDER-TOP: #886600 1px outset; PADDING-LEFT: 2px; PADDING-BOTTOM: 2px; BORDER-LEFT: #886600 1px outset; PADDING-TOP: 2px; BORDER-BOTTOM:#886600 1px outset;background-color:	#FFBB00; height: 20px; width: 120px; text-align: center; 
	}
	</style>
	</head>
	<body background="images.jpg">
	<h2>已寄信提醒借閱者盡早還書囉!!!請耐心等候!!!!</h2>
			<?php
			$BID = $_GET['BookID'];
			$host = 'localhost';
			$user = 'root';
			$passwd = '';
			$database = 'books';
			$link = mysqli_connect($host, $user, $passwd, $database);
			mysqli_select_db($link,$database);
			mysqli_query($link,"SET NAMES 'utf8';");
			$selectSql="SELECT * FROM books WHERE bookid = $BID ";
			$result = mysqli_query($link,$selectSql);
			$row = mysqli_fetch_row($result);
			$selectSql1="SELECT email FROM borrower WHERE userid = $row[4] ";
			$result1 = mysqli_query($link,$selectSql1);
			$row1 = mysqli_fetch_row($result1);
			$subject = "人工智慧實驗室圖書館還書提醒";
			$body = "有人想借閱此書\n\n書名:$row[1]\n\n記得要在期限內準時還書喔";
			$headers = "From: AILab Library";
			mail($row1[0], $subject, $body, $headers);
			?>
	<h3><a href = "borrowpage.php" class = "back">上一頁</a></h3>
	</body>
</html>
