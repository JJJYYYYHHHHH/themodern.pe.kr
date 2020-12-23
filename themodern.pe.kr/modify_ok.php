<?php
include 'db.php';

$bno = $_GET['bnum'];

$title = $_POST['title'];
$content = $_POST['content'];
$sql = mq("update board set 'title='".$title."',content='".$content."' where bnum='".$bno."'"); ?>

<script type="text/javascript">alert("수정되었습니다."); </script>
<meta http-equiv="refresh" content="0 url=readManager.php?bnum=<?php echo $bno; ?>">


