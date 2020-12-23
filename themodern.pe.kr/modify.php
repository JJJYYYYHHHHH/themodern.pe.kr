<?php include 'db.php'?>

<?php
	$bno = $_GET['bnum'];
	$sql = mq("select * from board where bnum='$bno';");
	$board = $sql->fetch_array();
 ?>
<!doctype html>
<head>
<meta charset="UTF-8">
<title>공지사항 수정하는 곳</title>
<style type="text/css">
/* 게시판 글쓰기 */
#board_write {
	width:900px;
	position:relative;
	margin:0 auto;
}
#write_area {
	margin-top:70px;
	font-size:14px;}
#in_name {
	margin-top:30px;
}
#in_name textarea {
	font-weight:bold;
	font-size:26px;
	color:#333;
	width: 900px;
	border:none;
	resize: none;
}
#in_title {
	margin-top:30px;
}
#in_title textarea {
	font-weight:bold;
	font-size:26px;
	color:#333;
	width: 900px;
	border:none;
	resize: none;
}
.wi_line {
	border:solid 1px lightgray;
	margin-top:10px;
}
#in_content {
	margin-top:10px;
}
#in_content textarea {
	font:14px;
	color:#333;
	width: 900px;
	height: 400px;
	resize: none;
}
#in_pw input {
	font:14px;
	margin-top:10px;
}
.bt_se {
	margin-top:20px;
	text-align:center;
}
.bt_se button {
	width:100px;
	height:30px;
}
</style>

</head>
<body>
    <div id="board_write">
        <h1>공지사항 글 수정하는곳</h1>
        <h4>글을 수정하는 공간입니다.</h4>
            <div id="write_area">
                <form action="modify_ok.php?bnum=<?php echo $bno; ?>" method="post">
                    <div id="in_title">
                        <textarea name="title" id="utitle" rows="1" cols="55" maxlength="100" required><?php echo $board['title']; ?></textarea>
                    </div>
                    <div class="wi_line"></div>
                    <div id="in_content">
                        <textarea name="content" id="ucontent" placeholder="내용" required><?php echo $board['content']; ?></textarea>
                    </div>
                    <div class="bt_se">
                        <button type="submit">글 수정</button>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>