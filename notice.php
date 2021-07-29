<!DOCTYPE html>
<html lang="ko">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 위 3개의 메타 태그는 *반드시* head 태그의 처음에 와야합니다; 어떤 다른 콘텐츠들은 반드시 이 태그들 *다음에* 와야 합니다 -->
    <title>부트스트랩 101 템플릿</title>

    <!-- 부트스트랩 -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">

    <!-- IE8 에서 HTML5 요소와 미디어 쿼리를 위한 HTML5 shim 와 Respond.js -->
    <!-- WARNING: Respond.js 는 당신이 file:// 을 통해 페이지를 볼 때는 동작하지 않습니다. -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container-fluid">
      <!-- 네비게이션바 시작 -->
      <nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php"><img src="imgs/logo.png"></a>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.php">Home</a></li>
        <li><a href="#" onclick="$('#about').animatescroll();">About</a></li>
        <li><a href="#" onclick="$('#portfolio').animatescroll();">Portfolio</a></li>
        <li><a href="#" onclick="$('#contact').animatescroll();">Contact</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div>
</nav>
      <!-- 네비게이션바 끝 -->
      <?
        $page=1;
        $startrow=($page-1)*5;
        $conn=mysqli_connect("localhost","root","autoset","mydb");
        $sql="select * from notice order by no desc limit $startrow,10";
        $rs=mysqli_query($conn,$sql);
      ?>
      <div class="container topmenu">
            <a href="#">Login</a> | 
            <a href="#">SignUp</a>
      </div>
      <div class="container">
        <h4>공지사항 리스트</h4>
        <table class="table table-bordered">
          <tr>
            <th>번호</th>
            <th>제목</th>
            <th>작성자</th>
            <th>작성일</th>
            <th>조회수</th>
          </tr>
           <? while($row=mysqli_fetch_array($rs)){ ?>
          <tr>
             <td><?=$row["no"]?></td>
             <td><?=$row["title"]?></td>
             <td><?=$row["writer"]?></td>
             <td><?=$row["writeday"]?></td>
             <td><?=$row["hit"]?></td>
          </tr>
          <? } ?>
        </table>
      </div>
      
      <!-- footer start -->
      <div class="gap"></div>
      <header class="content1">
        <div class="container">
          All right reserved by 9pixelstudio since 2001.
        </div>
      </header>
      <!-- footer end -->

    </div><!-- /.container-fluid -->

    <!-- jQuery (부트스트랩의 자바스크립트 플러그인을 위해 필요합니다) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- 모든 컴파일된 플러그인을 포함합니다 (아래), 원하지 않는다면 필요한 각각의 파일을 포함하세요 -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/animatescroll.min.js"></script>
    <script>
      $(".carousel").carousel({
        interval:2000
      })
      $(document).ready(function(){
        $(".fancybox").fancybox();
        //문서가 시작될 때, 팬시박스 클래스매서드를 실행시킨다.
      })
    </script>
  </body>
</html>

<!-- 
bootstrapk.com 파일 다운로드
기본템플릿 복사붙여넣기
컴포넌트 - navbar 네비게이션바 붙여넣기
navber-fixed-top적용 상단메뉴 고정
carousel 붙여넣기
아이콘을 데스크탑 / 모바일 버전 각각 나누어 배치
about영역 작성 - 영역 아이디 먼저작성 후 컨텐츠 삽입
<div id="about"></div>
portfolio영역 작성  - carousel 재사용 / fancybox jquery api(팝업창)사용 (fancyapps.com/fancybox/3)
contact영역 작성
 -->