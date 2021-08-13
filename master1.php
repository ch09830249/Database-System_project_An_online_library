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
	<h1>考研用書</h1>
<?php
	$host = 'localhost';
	$user = 'root';
	$passwd = '';
	$database = 'books';
	$link = mysqli_connect($host, $user, $passwd, $database);
	mysqli_select_db($link,$database);
	mysqli_query($link,"SET NAMES 'utf8';");
	$selectSql="SELECT * FROM books WHERE category = '考研用書'";
	$result = mysqli_query($link,$selectSql);
// 開始繪製表格
    echo "<table class = table4_1><tr align='center'>";
// 繪製欄位名稱
	    echo "<td>書籍編號</td>";
		echo "<td>書名</td>";
		echo "<td>書籍分類</td>";
		echo "<td>作者</td>";
        echo "</tr>";
// 輸出各筆資料
    while($row=mysqli_fetch_row($result)) {
                echo "<tr align='center'>";
                for($j=0; $j<mysqli_num_fields($result)-2; $j++) {
                        echo "<td>$row[$j]</td>";
                }
                echo "<tr/>";
    }echo "</table>";
?>
<h3><a href = "category1.php" class = "back">上一頁</a></h3>
	</body>
</html>