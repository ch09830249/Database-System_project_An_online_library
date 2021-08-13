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
		<h2><a href="registerpage.php" class = "user">Register an account</a></h2>
		<h2><a href="loginpage.php" class = "user">Log in</a></h2>
		<form action='selectbook.php' method='POST' align="center">
				<font size =5>館藏查詢</font><input type='text' name='input' />
				<button type='submit' >書名查詢</button>
		<h1 align="center"><a href="selectall.php" class = "library">所有館藏</a></h1>
		<h1 align="center"><a href="category.php" class = "library">分類查詢</a></h1>	
		</form>	
	</body>				
</html>