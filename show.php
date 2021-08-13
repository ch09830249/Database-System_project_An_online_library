<?php
$host = 'localhost';
$user = 'root';
$passwd = '';
$database = 'books';
$link = mysqli_connect($host, $user, $passwd, $database);
if($link->connect_error){
	die("連線資料庫失敗: " . $connect->connect_error);
}
else{
		echo "連線資料庫成功<br>";
}
if(!mysqli_select_db($link,$database)){
    die("選取資料庫失敗！");
}
else{
    echo "連接 " . $database . " 資料庫成功！<br>";
}
mysqli_query($link,"SET NAMES 'utf8';");
$insertSql="INSERT INTO `books` (`bookid`, `bookname`, `category`, `author`, `userid`, `duedate`) VALUES ('21', '每個人的商學院・商業基礎：客戶心理是一切需求的起始點', '劉潤', NULL, NULL, NULL);";
$selectSql="SELECT * FROM `books`;";
$deleteSql="DELETE FROM `books` WHERE `books`.`bookid` = 21;";
$result = mysqli_query($link,$selectSql);
if ($result) {
    $num = mysqli_num_rows($result);
    echo "books 資料表有 " . $num . " 筆資料<br>";
}

// --- 顯示資料 --- //

echo "<br>顯示資料（MYSQLI_NUM，欄位數）：<br>";

$result = mysqli_query($link, $selectSql);
while ($row = mysqli_fetch_array($result, MYSQLI_NUM)) {
    printf("第 %s 筆資料 : %s<br>", $row[0], $row[1]);
}

echo "<br>顯示資料（MYSQLI_ASSOC，欄位名稱）：<br>";

$result = mysqli_query($link, $selectSql);
while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
    print_r( $row);printf("<br>");
}

echo "<br>顯示資料（MYSQLI_BOTH，欄位數 & 欄位名稱皆可，採用欄位數）：<br>";

$result = mysqli_query($link, $selectSql);
while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)) {
    printf("第 %s 筆資料 : %s<br>", $row[0], $row[1]);
}

echo "<br>顯示資料（MYSQLI_BOTH，欄位數 & 欄位名稱皆可，採用欄位名稱）：<br>";

$result = mysqli_query($link, $selectSql);
while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)) {
    print_r( $row);printf("<br>");
}

// 釋放記憶體
mysqli_free_result($result);

// 關閉連線
mysqli_close($link);



?>