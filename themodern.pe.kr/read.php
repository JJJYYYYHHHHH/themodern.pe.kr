<?php include 'db.php'?>
<!DOCTYPE html>
<html lang="en">
<?php include 'head.php'?>
<body>
<?php include 'nav.php'?>

  <!-- Page Header -->
  <header class="masthead" style="background-image: url('img/background2.jpg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="page-heading">
            <h1>공지사항</h1>
            <span class="subheading">Notice</span>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Main Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <div id="board_area"> 
           <body>
              <?php
                $bno = $_GET['bnum']; /* bno함수에 idx값을 받아와 넣음*/
                $hit = mysqli_fetch_array(mq("select * from board where bnum ='".$bno."'"));
                $hit = $hit['hit'] + 1;
                $fet = mq("update board set hit = '".$hit."' where bnum = '".$bno."'");
                $sql = mq("select * from board where bnum='".$bno."'"); /* 받아온 idx값을 선택 */
                $board = $sql->fetch_array();
              ?>
            <!-- 글 불러오기 -->
            <div id="board_read">
              <h2><?php echo $board['title']; ?></h2>
                <div id="user_info">
                  <?php echo $board['date']; ?>    조회:<?php echo $board['hit']; ?>
                </div>
                <div id="bo_content">
                <hr>
                  <h5><?php echo nl2br("$board[content]"); ?></h5>
                </div>
              <!-- 목록 -->
              <div id="bo_ser">
                <hr>
                
                  <a href="notice.php">[목록으로]</a></li>
                
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
