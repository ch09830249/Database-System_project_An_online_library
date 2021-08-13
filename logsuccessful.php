<html>
	<head><title>AILab Library</title>
	<font size = 7 face="標楷體" color = blue>人工智慧實驗室圖書館<br></font>
	<style>
	.user{ 
		text-decoration:none;
		color: #4D2078;
		PADDING-RIGHT: 2px;
		PADDING-LEFT: 2px;
		PADDING-BOTTOM: 2px;
		PADDING-TOP: 2px;
		background-color:#EEEBFF;
		height: 20px;
		width: 120px;
		text-align: center;
		border: #A498BD;
		border-style: outset;
		border-top-width: 2px;
		border-right-width: 2px;
		border-bottom-width: 2px;
		border-left-width: 2px
	}
    .user:hover { 
		BORDER-RIGHT: ##605080 1px outset; PADDING-RIGHT: 2px; BORDER-TOP: #605080 1px outset; PADDING-LEFT: 2px; PADDING-BOTTOM: 2px; BORDER-LEFT: #605080 1px outset; PADDING-TOP: 2px; BORDER-BOTTOM: #605080 1px outset;background-color:#BDAAE2; height: 20px; width: 120px; text-align: center; 
	}
	.library{ 
		text-decoration:none;
		color: #0066FF;
		PADDING-RIGHT: 2px;
		PADDING-LEFT: 2px;
		PADDING-BOTTOM: 2px;
		PADDING-TOP: 2px;
		background-color:#99FFFF;
		height: 20px;
		width: 120px;
		text-align: center;
		border: #000088;
		border-style: outset;
		border-top-width: 2px;
		border-right-width: 2px;
		border-bottom-width: 2px;
		border-left-width: 2px
	}
    .library:hover { 
		BORDER-RIGHT: #000088 1px outset;
		PADDING-RIGHT: 2px;
		BORDER-TOP: #000088 1px outset;
		PADDING-LEFT: 2px;
		PADDING-BOTTOM: 2px;
		BORDER-LEFT: #000088 1px outset;
		PADDING-TOP: 2px;
		BORDER-BOTTOM: #000088 1px outset;
		background-color:#00BBFF;
		height: 20px;
		width: 120px;
		text-align: center; 
	}
	</style>
	</head>
	<body background="images.jpg">
		<h1 align="left">歡迎
		<?php 
		session_start(); 
		$people = $_SESSION["user"];
		echo "$people";
		?> 大大來借書
		</h1>		
		<h1><a href="index.php" class = "user">Log out</a></h1>
		<form action='selectbook1.php' method='POST' align="center">
				<font size =5>館藏查詢</font><input type='text' name='input' />
				<button type='submit' >書名查詢</button>
		</form>			
		<h1 align="center"><a href="selectall1.php" class = "library">所有館藏</a></h1>		
		<h1 align="center"><a href="category1.php" class = "library">分類查詢</a></h1>	
		<h1 align="center"><a href="borrowpage.php" class = "library">借書</a></h1>
		<h1 align="center"><a href="returnpage.php" class = "library">還書(已借閱書籍)</a></h1>
		<h1 align="center"><a href="addnewbook.php" class = "library">新增書籍</a></h1>
		<h1 align="center"><a href="delbook.php" class = "library">刪除書籍</a></h1>

	</body>
</html>