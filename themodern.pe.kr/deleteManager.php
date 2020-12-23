<?php
    include 'db.php';
	
	$bno = $_GET['bnum'];
	$sql = mq("delete from board where bnum='$bno';");
?>
<script type="text/javascript">alert("삭제되었습니다.");</script>
<meta http-equiv="refresh" content="0 url=noticeManager.php" />