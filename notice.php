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
            <table class="list-table">
              <hr>
              <thead>
                <tr style="text-align:center;">
                  <th width="70">번호</th>
                  <th width="400" >제목</th>
                  <th width="150">작성일</th>
                  <th width="50">조회수</th>
                </tr>
              </thead>
                <?php
                // board테이블에서 bnum를 기준으로 내림차순해서 5개까지 표시
                  $sql = mq("select * from board order by bnum desc limit 0,10"); 
                    while($board = $sql->fetch_array())
                    {
                      //title변수에 DB에서 가져온 title을 선택
                      $title=$board["title"]; 
                      if(strlen($title)>40)
                      { 
                        //title이 40을 넘어서면 ...표시
                        $title=str_replace($board["title"],mb_substr($board["title"],0,40,"utf-8")."...",$board["title"]);
                      }
                ?>
              <tbody>
                <tr>
                  <td width="100" style="text-align:center;"><?php echo $board['bnum']; ?></td>
                  <td width="600"><a href="read.php?bnum=<?php echo $board["bnum"];?>">
                  <?php echo $title;?></a></td>
                  <td width="150"><?php echo $board['date']?></td>
                  <td width="100" style="text-align:center;"><?php echo $board['hit']; ?></td>
                </tr>
              </tbody>
              <?php } ?>
            </table>
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
