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
	input[type=text], select, textarea {
		  width: 100%;
		  padding: 12px;
		  border: 1px solid #ccc;
		  border-radius: 4px;
		  resize: vertical;
	}
	label {
		  padding: 12px 12px 12px 0;
		  display: inline-block;
	}
	.container {
		  border-radius: 5px;
		  background-color: #f2f2f2;
		  padding: 20px;
	}
	.col-25 {
		  float: left;
		  width: 10%;
		  margin-top: 6px;
	}

	.col-75 {
		  float: left;
		  width: 75%;
		  margin-top: 6px;
	}
	.row:after {
		  content: "";
		  display: table;
		  clear: both;
	}
	</style>
	</head>
	<body background="images.jpg">
		<h1>刪除書籍</h1>
			<div class="container">
			<form action='delb.php' method='POST'>
				<div class="row">
					  <div class="col-25">
						<label for="bookname"><font size = 4>書籍名稱</font></label>
					  </div>
					  <div class="col-75">
						<input type="text" id="bookname" name="bookname" placeholder="Your name..">
					  </div>
				</div>
				<div class="row">
					  <input type="submit" value="刪除書籍">
				</div>
			</form>	
			</div>	
			<h2><a href = "logsuccessful.php" class = "back">上一頁</a></h2>
	</body>
</html>