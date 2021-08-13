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
	.table4_1 table {
		width:100%;
		margin:15px 0;
		border:0;
	}
	.table4_1 th {
		background-color:#93DAFF;
		color:#000000
	}
	.table4_1,.table4_1 th,.table4_1 td {
		font-size:0.95em;
		text-align:center;
		padding:4px;
		border-collapse:collapse;
	}
	.table4_1 th,.table4_1 td {
		border: 1px solid #c1e9fe;
		border-width:1px 0 1px 0
	}
	.table4_1 tr {
		border: 1px solid #c1e9fe;
	}
	.table4_1 tr:nth-child(odd){
		background-color:#dbf2fe;
	}
	.table4_1 tr:nth-child(even){
		background-color:#fdfdfd;
	}
	</style>
	</head>
	<body background="images.jpg">
		<h1 align="left">歡迎
		<?php 
		session_start(); 
		$people = $_SESSION["user"];
		$peopleid = $_SESSION["userid"];
		echo "$people";
		?> 大大來還書
		</h1>
		<h1><a href="index.php" class = "user">Log out</a></h1>
		<h1>您目前借閱的書籍(請注意還書時間)</h1>
		<?php
			$host = 'localhost';
			$user = 'root';
			$passwd = '';
			$database = 'books';
			$link = mysqli_connect($host, $user, $passwd, $database);
			mysqli_select_db($link,$database);
			mysqli_query($link,"SET NAMES 'utf8';");
			$selectSql="SELECT * FROM books WHERE duedate IS NOT NULL AND userid = $peopleid ";
			$result = mysqli_query($link,$selectSql);
		// 開始繪製表格
			echo "<table class = table4_1><tr align='center'>";
		// 繪製欄位名稱
				echo "<td>書籍編號</td>";
				echo "<td>書名</td>";
				echo "<td>書籍分類</td>";
				echo "<td>作者</td>";
				echo "<td>還書日期</td>";
				echo "<td>還書</td>";
				echo "</tr>";
		// 輸出各筆資料
			while($row=mysqli_fetch_row($result)) {
						echo "<tr align='center'>";
						for($j=0; $j<mysqli_num_fields($result); $j++) {
								if($j < 4){
									echo "<td>$row[$j]</td>";
								}else if($j==4){
									echo "<td>$row[5]</td>";
								}
								else{
									echo "<td><a href='return.php?BookID=".$row[0]."' class = library>還書</a></td>";
								}
						}
						echo "<tr/>";
			} echo "</table>";
		?>
		<h3><a href = "logsuccessful.php" class ="back">上一頁</a></h3>	
	</body>
</html>