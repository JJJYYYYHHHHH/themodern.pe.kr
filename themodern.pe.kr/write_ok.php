<?php

include 'db.php';

//각 변수에 write.php에서 input name값들을 저장한다

$title = $_POST['title'];
$content = $_POST['content'];
$date = date('Y-m-d');
if($title && $content){
    $mqq = mq("alter table board auto_increment =1"); //auto_increment 값 초기화
    $sql = mq("insert into board(title,content,date) values('".$title."','".$content."','".$date."')"); 
    echo "<script>
    alert('글쓰기 완료되었습니다.');
    location.href='noticeManager.php';</script>";
}else{
    echo "<script>
    alert('글쓰기에 실패했습니다.');
    history.back();</script>";
}
?>
