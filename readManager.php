<?php include 'db.php'?>

<!DOCTYPE html>
<html lang="en">
<body>
 <!-- Main Content -->
 <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <div id="board_area"> 
           <body>
              <?php
                $bno = $_GET['bnum']; /* bno함수에 idx값을 받아와 넣음*/
                $hit = mysqli_fetch_array(mq("select * from board where bnum ='".$bno."'"));
                $hit = $hit['hit'];
                $fet = mq("update board set hit = '".$hit."' where bnum = '".$bno."'");
                $sql = mq("select * from board where bnum='".$bno."'"); /* 받아온 idx값을 선택 */
                $board = $sql->fetch_array();
              ?>
            <!-- 글 불러오기 -->
            <div id="board_read">
              <h2><?php echo $board['title']; ?></h2>
                <div id="user_info">
                  <?php echo $board['date']; ?> 조회:<?php echo $board['hit']; ?>
                    <div id="bo_line"></div>
                </div>
                <div id="bo_content">
                  <?php echo nl2br("$board[content]"); ?>
                </div>
              <!-- 목록 -->
              <div id="bo_ser">
                <ul>
                  <li><a href="noticeManager.php">[목록으로]</a></li>
                  <li><a href="modify.php?bnum=<?php echo $board['bnum']; ?>">[수정(현재 사용 불가)]</a></li>
                  삭제주의 삭제주의 삭제주의
			      <li><a href="deleteManager.php?bnum=<?php echo $board['bnum']; ?>">[삭제(누르면 바로 삭제됩니다.)]</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  <?php include 'footer.php'?>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Contact Form JavaScript -->
  <script src="js/jqBootstrapValidation.js"></script>
  <script src="js/contact_me.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/clean-blog.min.js"></script>

</body>

</html>