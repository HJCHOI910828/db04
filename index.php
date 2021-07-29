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
      <div class="container topmenu">
            <a href="#">Login</a> | 
            <a href="#">SignUp</a>
      </div>

      <!-- carousel 시작 -->
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
      <li data-target="#carousel-example-generic" data-slide-to="1"></li>
      <li data-target="#carousel-example-generic" data-slide-to="2"></li>
      <li data-target="#carousel-example-generic" data-slide-to="3"></li>
      <li data-target="#carousel-example-generic" data-slide-to="4"></li>
      <li data-target="#carousel-example-generic" data-slide-to="5"></li>
    </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="imgs/1.jpg" alt="...">
      </div>
    <div class="item">
      <img src="imgs/2.jpg" alt="...">
      </div>
       <div class="item">
      <img src="imgs/3.jpg" alt="...">
      </div>
       <div class="item">
      <img src="imgs/4.jpg" alt="...">
      </div>
       <div class="item">
      <img src="imgs/5.jpg" alt="...">
      </div>
       <div class="item">
      <img src="imgs/7.jpg" alt="...">
      </div>
    </div>
  
  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
      <!-- carousel 끝 -->

      <!-- 아이콘부분 시작 -->
      <div class="gap"></div>
      <div class="container">
        <div class="row">
          <div class="col-xs-6 col-md-3 icontxt">
            <a href="#">
              <span class="glyphicon glyphicon-asterisk icons">
              </span>
              <h4>Fresh_&amp; clean design</h4>
              <p>깔끔하고 세련된 웹 및 그래픽 디자인을 구현합니다.</p>
            </a>
          </div>
          <div class="col-xs-6 col-md-3 icontxt">
            <a href="#">
              <span class="glyphicon glyphicon-plus icons">
              </span>
              <h4>Fully responsive</h4>
              <p>9pixelstudio에서 만드는 웹 사이트는 반응형 웹 사이트를 기본으로 작업합니다.</p>
            </a>
          </div>
          <div class="col-xs-6 col-md-3 icontxt">
            <a href="#">
              <span class="glyphicon glyphicon-euro icons">
                </span>
              <h4>Very flexible</h4>
              <p>HTML5와 CSS3 기반으로 제작된 웹 페이지는 수정과 유지보수가 빠르고 간편합니다.</p>
            </a>
          </div>
          <div class="col-xs-6 col-md-3 icontxt">
            <a href="#">
              <span class="glyphicon glyphicon-minus icons">
                </span>
              <h4>For customer</h4>
              <p>고객의 요구에 따른 최상의 결과물을 제공해 드립니다.</p>
            </a>
          </div>
        </div>
      </div>
      <!-- 아이콘부분 끝 -->

      <!-- about 영역 시작 -->
      <div id="about"></div>
      <header class="content1">
        <div class="container">
          <h1><small>9pixelstudio는 웹 표준(web Standard)으로 사이트를 구축합니다.</small></h1>
          <p>HTML5와 CSS3 그리고 jquery 기반으로 한 최신의 웹 사이트를 구축하며, 플래시를 전혀 사용하지 않고, 세련된 UI를 구현합니다.</p>
        </div>
      </header>
      <div class="container">
        <img src="imgs/9pixel.gif" class="img-responsive"><!-- img-responsive - 창을 줄이면 이미지크기가 조절 됨 -->
        <div class="row">
          <div class="col-md-4">
            <img src="imgs/about1.jpg" class="img-responsive">
          </div>
          <div class="col-md-8">
            <p>9pixelstudio 대표 김진우는 1995년 국내 최초 ISP 인터피아 웹 마스터로써 인터피아 웹 사이트 기획/제작/유지보수를 담당했었으며, 두산그룹 웹 사이트 기획/개발/유지보수, 두산계열사 웹 마스터 교육 담당, 국제 유도 연맹 웹 사이트 기획/개발, 두산그룹 두산타워, 두산 베어스, 오비맥주, 국제유도 연맹 웹 사이트 기획/개발/유지보수 및 쌍용아파트 웹 사이트를 기획했으며, 2000년 부터 온라인 이벤트 사이트, 유텐드 웹 사이트 기획/개발/마케팅 한국 본부장을 역임 하였습니다. 그 외 많은 일을 하였습니다.</p>
          </div>
        </div><!-- row end -->
        <hr>
        <div class="row">
          <div class="col-md-6">
            <!-- 아코디언 시작 -->
            <h3>Why 9pixelstudio?</h3>
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingOne">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          우리 회사의 자랑은요...
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingTwo">
      <h4 class="panel-title">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Collapsible Group Item #2
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
      <div class="panel-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingThree">
      <h4 class="panel-title">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Collapsible Group Item #3
        </a>
      </h4>
    </div>
    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
      <div class="panel-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
</div>
            <!-- 아코디언 끝 -->
          </div>
          <div class="col-md-6">
            <!-- 저서 소개 시작 -->
            <h3>Books</h3>
            <img src="imgs/book/2.png" class="img-responsive book1">
            <img src="imgs/book/3.png" class="img-responsive book2">
            <img src="imgs/book/4.png" class="img-responsive book3">
            <!-- 저서 소개 끝 -->
          </div>
        </div><!-- row end -->
      </div><!-- container end -->
      <!-- about 영역 끝 -->
      <!-- portfolio 영역 시작 -->
      <div id="portfolio"></div>
        <header class="content1">
          <h1><small>Portfolio</small></h1>
          <p>2021년부터 최근까지 9pixelstudio가 작업한 결과물들입니다.</p>
        </header>
        <div class="container">
          <h2>Site Development</h2>
          <!-- carousel2 start -->
          <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <!-- portfolio 첫번째 사진들 배치시작 -->
          <div class="row">
            <div class="col-xs-3">
              <div class="thumbnail site">
              <img src="imgs/portfolio/site5.jpg">
              <h4>두바이 소반 레스토랑</h4>
              <p>워드프레스 기반으로 제작되었으며,두바이에서 가장 유명한 한식,중식,양식 레스토랑입니다.</p>
            </div><!-- thumbnail site end -->
            </div>
            <div class="col-xs-3">
              <div class="thumbnail site">
              <img src="imgs/portfolio/site6.jpg">
              <h4>두바이 씨월드 레스토랑</h4>
              <p>두바이에서 가장 유명한 레스토랑 입니다. html5와 css3 기반에 jquery를 적용하였습니다.</p>
            </div><!-- thumbnail site end -->
            </div>
            <div class="col-xs-3">
              <div class="thumbnail site">
              <img src="imgs/portfolio/site7.jpg">
              <h4>에이마트 온라인 쇼핑몰</h4>
              <p>두바이 최대 아시안 푸드마켓.</p>
            </div><!-- thumbnail site end -->
            </div>
            <div class="col-xs-3">
              <div class="thumbnail site">
              <img src="imgs/portfolio/site8.jpg">
              <h4>스마트북스</h4>
              <p>경제전문 서적 출판사 스마트북스의 웹 사이트 입니다.<br>웹 표준 기반으로 php를 이용하여 제작되었습니다.</p>
            </div><!-- thumbnail site end -->
            </div>
          </div>
          <!-- portfolio 첫번째 사진들 배치끝 -->
        </div>
        <div class="item">
          <!-- portfolio 두번째 사진들 배치시작 -->
          <div class="row">
            <div class="col-xs-3">
              <div class="thumbnail site">
              <img src="imgs/portfolio/site1.jpg">
              <h4>제주관광문화산업진흥원</h4>
              <p>제주관광문화산업진흥원 사이트로 html5와 css3 그리고 jquery와 php기반으로 제작되었습니다.</p>
            </div><!-- thumbnail site end -->
            </div>
            <div class="col-xs-3">
              <div class="thumbnail site">
              <img src="imgs/portfolio/site2.jpg">
              <h4>(주)신시웨이</h4>
              <p>국내 DB보안 3대 회사 중 하나인 신시웨이 웹 사이트 입니다. html, css, javascript, jquery, bootstrap기반으로 제작되었습니다.</p>
            </div><!-- thumbnail site end -->
            </div>
            <div class="col-xs-3">
              <div class="thumbnail site">
              <img src="imgs/portfolio/site3.jpg">
              <h4>두바이 아시아나 호텔</h4>
              <p>두바이 5성급 호텔인 아시아나 호텔 사이트입니다. xhtml1.0과 css2기반으로 제작되었습니다.</p>
            </div><!-- thumbnail site end -->
            </div>
            <div class="col-xs-3">
              <div class="thumbnail site">
              <img src="imgs/portfolio/site4.jpg">
              <h4>두바이 보라카이 클럽</h4>
              <p>두바이 최대 클럽인 보라카이 클럽 사이트 입니다. 쉡 표준 기반으로 제되었습니다.</p>
            </div><!-- thumbnail site end -->
            </div>
          </div>
          <!-- portfolio 두번째 사진들 배치끝 -->
        </div>
      </div><!-- carousel-inner end -->
    </div><!-- carousel-example-generic end -->
          <!-- carousel2 end -->
        </div>
      <!-- portfolio 영역 끝 -->

      <!-- contact 영역 시작 -->
      <div id="contact"></div>
      <header class="content1">
        <h1><small>Contact</small></h1>
        <p>사이트 제작 문의 및 웹 표준 교육에 관해서 질문하는 곳입니다.</p>
      </header>
      <div class="gap"></div>
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <table class="table table-bordered">
              <tr>
              <td>이름</td>
              <td><input type="text"></td>
            </tr>
            <tr>
              <td>이메일</td>
              <td><input type="text"></td>
            </tr>
            <tr>
              <td>제목</td>
              <td><input type="text"></td>
            </tr>
            <tr>
              <td>내용</td>
              <td><textarea name="content" rows="10" cols="55"></textarea></td>
            </tr>
            <tr>
              <td colspan="2" align="center">
                <input type="button" class="btn btn-primary" value="전송하기">&nbsp;
                <input type="button" class="btn btn-warning" value="다시쓰기">
              </td>
            </tr>
          </table>
          </div>
          <div class="col-md-5">
            <p><span class="glyphicon glyphicon-home"></span> 부산광역시 해운대구 우동 마린빌딩 302호</p>
            <p><span class="glyphicon glyphicon-phone-alt"></span> 010-1111-2222</p>
            <p><span class="glyphicon glyphicon-envelope"></span> test@test.com</p>
            <p><span class="glyphicon glyphicon-file"></span> 9pixelstudio.com</p>
          </div>
        </div>
      </div>
      <div class="gap"></div>
      <?
        $page=1;
        $startrow=($page-1)*5;
        $conn=mysqli_connect("localhost","root","autoset","mydb");
        $sql="select * from notice order by no desc limit $startrow,5";
        $rs=mysqli_query($conn,$sql);
      ?>
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <table class="table table-bordered">
              <tr>
                <th>번호</th>
                <th>제목</th>
                <th>날짜</th>
              </tr>
              <? while($row=mysqli_fetch_array($rs)){ ?>
              <tr>
                <td><?=$row["no"]?></td>
                <td><?=$row["title"]?></td>
                <td><?=$row["writeday"]?></td>
              </tr>
              <? } ?>
              <tr>
              <td colspan="3" align="center">
                <input type="button" class="btn btn-primary" value="추가하기" onclick="location.href='notice.php'">
              </td>
            </tr>

            </table>
          </div>
          <div class="col-md-3">
          </div>
        </div>
      </div>
      <!-- contact 영역 끝 -->

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