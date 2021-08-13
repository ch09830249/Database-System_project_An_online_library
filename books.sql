-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2020-05-08 07:22:05
-- 伺服器版本： 10.4.11-MariaDB
-- PHP 版本： 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `books`
--

-- --------------------------------------------------------

--
-- 資料表結構 `books`
--

CREATE TABLE `books` (
  `bookid` int(11) NOT NULL,
  `bookname` text NOT NULL,
  `category` text NOT NULL,
  `author` text DEFAULT NULL,
  `userid` int(11) DEFAULT NULL,
  `duedate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `books`
--

INSERT INTO `books` (`bookid`, `bookname`, `category`, `author`, `userid`, `duedate`) VALUES
(1, '類神經網路理論與實務', '人工智慧', '張麗秋 黃浩倫', NULL, NULL),
(2, '細說網路概論與Internet', '網際網路', '潘皇玉', NULL, NULL),
(3, 'Professional Web APIs with PHP', '網際網路', 'Paul Micheal', NULL, NULL),
(4, '14天學會Active Server Pages', '網際網路', 'Sanjaya Hettihewa', NULL, NULL),
(5, 'Google情報檢索術', '電腦工具', '韓衣非', NULL, NULL),
(6, '精通HTML修訂版', '網際網路', '洪錦魁', NULL, NULL),
(7, 'VISUAL BASIC6程式設計學習寶典', '程式設計', '盧毅', NULL, NULL),
(8, '漫畫36計商戰新說', '商業用書', '張永軍', NULL, NULL),
(9, '快快樂樂樂學PowerPoint 2003', '電腦工具', '文淵閣', NULL, NULL),
(10, '資料處理', '考研用書', '柯霖廷', NULL, NULL),
(11, '實戰網頁設計', '網際網路', '陳維伊', NULL, NULL),
(12, '圖解Office範例教本', '電腦工具', '古成全', NULL, NULL),
(13, 'Data Mining: A TUTORIAL-BASED PRIMER', '人工智慧', 'Richard J. Roiger', NULL, NULL),
(14, 'PyTorch深度學習與自然語言中文處理', '人工智慧', '邢夢來 王碩 孫洋洋', NULL, NULL),
(15, '機器學習的數學基礎 : AI、深度學習打底必讀', '人工智慧', '胡豐榮 徐先正', NULL, NULL),
(16, '機器學習工程師面試全破解：嚴選124道AI演算法決勝題完整剖析', '人工智慧', '葫蘆娃', NULL, NULL),
(17, '給兒子的18堂商業思維課', '商業用書', '林明樟 林承勳', NULL, NULL),
(18, '大錢流：金錢的流動影響了歷史的變動，看記帳如何改變全世界，左右全球商業模式與金融發展', '商業用書', '田中靖浩', NULL, NULL),
(19, '商管研究資料分析', '商業用書', '莊懿妃 蔡義清 俞洪亮', NULL, NULL),
(20, '商業周刊', '商業用書', NULL, NULL, NULL),
(21, '線性代數', '考研用書', '黃子嘉', NULL, NULL),
(22, '作業系統', '考研用書', '洪逸', NULL, NULL),
(23, 'Deep learning 深度學習必讀：Keras 大神帶你用 Python 實作', '人工智慧', 'François Chollet', NULL, NULL),
(24, 'C語言基礎必修課(涵蓋「APCS大學程式設計先修檢測」試題詳解)', '程式設計', ' 蔡文龍, 何嘉益, 張志成, 張力元', NULL, NULL),
(25, 'Python 3.x 程式語言特訓教材（第二版）', '程式設計', ' 蔡明志, 財團法人中華民國電腦技能基金會', NULL, NULL),
(26, 'PyTorch自然語言處理：以深度學習建立語言應用程式', '人工智慧', ' Delip Rao, Brian McMahan', NULL, NULL),
(27, 'Julia 程式設計：新世代資料科學與數值運算語言', '程式設計', '杜岳華   胡筱薇', NULL, NULL),
(28, '計算機組織與結構', '考研用書', '張凡', NULL, NULL),
(30, ' 研究所考試--計算機概論經典題型(下)--電機.資工所', '考研用書', '余強、余思維', NULL, NULL),
(31, '計算機概論總複習世紀A選(2017最新版)(附學習地圖)', '考研用書', ' 夢想家資訊工場', NULL, NULL),
(32, ' Ruby錦囊妙技', '程式設計', ' Lucas Carlson，Leonard Richardson', NULL, NULL),
(33, 'iOS 10 App程式設計實力超進化實戰攻略：知名iOS教學部落格AppCoda作家親授實作關鍵技巧讓你不NG', '程式設計', 'Simon Ng', NULL, NULL),
(34, 'R 語言資料分析活用範例詳解', '程式設計', ' 方匡南, 朱建平, 姜葉飛', NULL, NULL);

-- --------------------------------------------------------

--
-- 資料表結構 `borrower`
--

CREATE TABLE `borrower` (
  `userid` int(11) NOT NULL,
  `username` text NOT NULL,
  `email` text NOT NULL,
  `tel` text NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `borrower`
--

INSERT INTO `borrower` (`userid`, `username`, `email`, `tel`, `address`) VALUES
(1, '張浩帥', 'ch09830249@gmail.com', '0911908536', '高雄市鼓山區鼓元街76-1號'),
(2, '彭威哥', 'ch09830249@yahoo.com.tw', '0933956232', '高雄市鼓山區哨船街256號5樓'),
(3, '古夢萍', 'kmp546546438@gmail.com', '0978543838', '翠亨C棟5487房'),
(4, '謝要紅', 'lol5412@gmail.com', '0956124123', '高雄市仁武區水管路152-1號'),
(5, '許月甲', 'maryhah456465a@gmail.com', '0911959632', 'H棟1234房'),
(6, '黃配魚', 'pei4546yuh@gmail.com', '0947258269', '高雄市鼓山區鼓山一路234巷7號'),
(7, '柯博文', 'kbwen@gmail.com', '0985631235', '塞博坦星'),
(8, '邱力歐', 'lcc45645641234@gmail.com', '0987456123', '高雄市楠梓區德中路266號20樓'),
(9, '蔡一霖', 'cylin78945@gmail.com', '0956424123', '高雄市鼓山區鼓山二路31號');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`bookid`),
  ADD KEY `userid` (`userid`);

--
-- 資料表索引 `borrower`
--
ALTER TABLE `borrower`
  ADD PRIMARY KEY (`userid`);

--
-- 已傾印資料表的限制式
--

--
-- 資料表的限制式 `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `books_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `borrower` (`userid`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
