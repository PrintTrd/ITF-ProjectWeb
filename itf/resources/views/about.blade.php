<!DOCTYPE html>
<html lang="en">
<head>
  <title>About</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!--<link rel="stylesheet" type="text/css" href="main.css">ถ้าเกิดจะทำcssอ่ะนะ-->
  <style>

      /*navbar*/
        .search-form .form-group {
		float: right !important;
		transition: all 0.35s, border-radius 0s;
		width: 32px;
		height: 32px;
		background-color: #fff;
		box-shadow: 0 1px 1px rgba(0, 0, 0, 0.075) inset;
		border-radius: 25px;
		border: 1px solid #ccc;
		}
		.search-form .form-group input.form-control {
		padding-right: 20px;
		border: 0 none;
		background: transparent;
		box-shadow: none;
		display:block;
		}
		.search-form .form-group input.form-control::-webkit-input-placeholder {
		display: none;
		}
		.search-form .form-group input.form-control:-moz-placeholder {
		/* Firefox 18- */
		display: none;
		}
		.search-form .form-group input.form-control::-moz-placeholder {
		/* Firefox 19+ */
		display: none;
		}
		.search-form .form-group input.form-control:-ms-input-placeholder {
		display: none;
		}
		.search-form .form-group:hover,
		.search-form .form-group.hover {
		width: 100%;
		border-radius: 25px 25px 25px 25px;
		}
		.search-form .form-group span.form-control-feedback {
		position: absolute;
		top: -1px;
		right: -2px;
		z-index: 2;
		display: block;
		width: 34px;
		height: 34px;
		line-height: 34px;
		text-align: center;
		color: #424344;
		left: initial;
		font-size: 14px;
		}
    /*content*/
    body, h1,h2,h3,h4,h5,h6 { text-align: center}
    body, html {
        height: 100%;
        line-height: 1.8;
        margin:0;
    }

    .zoomin img {
        height: 200px;
        width: 200px;
        -webkit-transition: all 2s ease;
           -moz-transition: all 2s ease;
            -ms-transition: all 2s ease;
                transition: all 2s ease;
      }
      .zoomin2 img {
        height: 250px;
        width: 300px;
        -webkit-transition: all 2s ease;
           -moz-transition: all 2s ease;
            -ms-transition: all 2s ease;
                transition: all 2s ease;
      }
      .zoomin img:hover {
        width: 300px;
        height: 300px;}
     
        @-webkit-keyframes swing
{
    15%
    {
        -webkit-transform: translateX(5px);
        transform: translateX(5px);
    }
    30%
    {
        -webkit-transform: translateX(-5px);
       transform: translateX(-5px);
    } 
    50%
    {
        -webkit-transform: translateX(3px);
        transform: translateX(3px);
    }
    65%
    {
        -webkit-transform: translateX(-3px);
        transform: translateX(-3px);
    }
    80%
    {
        -webkit-transform: translateX(2px);
        transform: translateX(2px);
    }
    100%
    {
        -webkit-transform: translateX(0);
        transform: translateX(0);
    }
}
    @keyframes swing
{
    15%
    {
        -webkit-transform: translateX(5px);
        transform: translateX(5px);
    }
    30%
    {
        -webkit-transform: translateX(-5px);
        transform: translateX(-5px);
    }
    50%
    {
        -webkit-transform: translateX(3px);
        transform: translateX(3px);
    }
    65%
    {
        -webkit-transform: translateX(-3px);
        transform: translateX(-3px);
    }
    80%
    {
        -webkit-transform: translateX(2px);
        transform: translateX(2px);
    }
    100%
    {
        -webkit-transform: translateX(0);
        transform: translateX(0);
    }
}
.swing:hover
{
        -webkit-animation: swing 1s ease;
        animation: swing 1s ease;
        -webkit-animation-iteration-count: 1;
        animation-iteration-count: 1;
}
.pimg1{
    background-image:url(img/pic/about_cover.jpg);
    min-height:100%; 
}
.pimg1{
    position: relative;
    opacity: 1;
    background-position: center;
    background-size:cover;
    background-repeat: no-repeat;
    /*fixed = parallax
    scroll = nomal */
    background-attachment: fixed  
}
.ptect{
    position:absolute;
    top:50%;
    width:100%;
    text-align:center;
    color:#000;
    font-size:27px;
    letter-spacing:8px;
    text-transform:uppercase;
}
.ptext, .border{
    background-color:#111;
    color:#fff;
    padding:20px; 
}
.pimg2{
    background-image:url(img/pic/team.jpeg);
    min-height:200px; 
}
.pimg2{
    position: relative;
    opacity: 1;
    background-position: center;
    background-size:cover;
    background-repeat: no-repeat;
    /*fixed = parallax
    scroll = nomal */
    background-attachment: fixed  
}
.ptect2{
    position:absolute;
    top:50%;
    width:100%;
    text-align:center;
    color:#000;
    font-size:27px;
    letter-spacing:8px;
    text-transform:uppercase;
}
.ptext2, .border2{
    
    color:#fff;
    padding:20px; 
}
.duty{
 color:darkolivegreen
}

  </style>
</head>

<body style="background-color:black">
    <!--navbar-->
    @include('components.nav')
<!--content-->
<div class="pimg1">
    <div class="ptect">
        <span class="border">
            About us

        </span>

    </div>
</div>


<div class="jumbotron" style="background-color:black;color:white;">
  <div class="container">
      <div class="col-sm-6" style='font-size:20px'><strong>About Us</strong><br>
        <p style='font-size:18px'>Board games คือเว็บไซต์ที่ได้รวบรวมบอร์ดเกมส์ต่าง ๆ มากมาย ซึ่งประกอบไปด้วยรูปภาพและเนื้อหาตลอดจนเกมส์ที่แนะนำ เพื่อให้ง่ายต่อการสืบค้นหรือศึกษาสำหรับผู้ที่สนใจในบอร์ดเกมส์</p>
      </div>
      <div class="col-sm-6" style='font-size:20px'><strong>Our Goal</strong><br>
        <p style='font-size:18px'>จุดมุ่งหมายของเรา คือการสร้างแหล่งรวมรวมข้อมูลของบอร์ดเกมส์ต่างๆซึ่งได้รวมถึงรายละเอียดของแต่ละเกมส์หรือเนื่อหาของเกมส์นั้น ๆ เพื่อเป็นประโยชน์ต่อผู้ที่สนใจและง่ายต่อการเข้าถึง</p>
      </div>
    </div>
  </div>
</div>
<!-- tools-->
<div class="container-fluid" style="background-color:white">
    <h3><strong>Our Tools</strong></h3><br><br>
    <p></p>
    <div class="container">
        <div class="row">
          <div class="col-sm-4 swing">
           <img src="{{asset( 'img/pic/html_css.png' )}}" width="300" height="200"> 
          </div>
          <div class="col-sm-4 swing">
            <img src="{{asset( 'img/pic/php-myadmin.png' )}}" width="300" height="200">
          </div>
          <div class="col-sm-4 swing">
          <img src="{{asset( 'img/pic/php.jpg' )}}" width="300" height="200">
          </div>
        </div>
        <br>
  </div>
</div>
  <!--team-->
  <div class="pimg2">
    <div class="ptect2">
        <span class="border2">
          Our team

        </span>

    </div>
</div>
  <div class="jumbotron" style="background-color:white">
      <div class="container">
        <div class="row">
          <div class="col-sm-4 zoomin">
            <a href="https://web.facebook.com/Sullvo1147" target="_blank"><img src="{{asset( 'img/pic/sun.jpg' )}}" class="img-rounded" alt="sun"width="200" height="200"style='padding:10px;background-color:white;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);'></a>
            <h4><strong>ไชยพงษ์ นิธิพีรวัฒน์</strong><h4>
            <h4 class="duty"><i>60070016</i></h4>            
            <h4 class="duty"><i>Front-end</i></h4>
          </div>
          <div class="col-sm-4 zoomin">
            <a href="https://web.facebook.com/PrintTheerada?_rdc=1&_rdr" target="_blank"><img src="{{asset( 'img/pic/print.jpg' )}}" class="img-rounded" alt="print" width="200" height="200"style='padding:10px;background-color:white;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);'></a>
            <h4><strong>ธิรดา ธีร์ธรรม</strong></h4>
            <h4 class="duty"><i>60070034</i></h4>            
            <h4 class="duty"><i>Back-end</i></h4>
          </div>
          <div class="col-sm-4 zoomin">
          <a href="https://web.facebook.com/warin001234?_rdc=1&_rdr" target="_blank"><img src="{{asset( 'img/pic/jak.jpg' )}}" class="img-rounded" alt="jak"width="200" height="200"style='padding:10px;background-color:white;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);'></a>
            <h4><strong>วาริน สุคันธเมศ</strong></h4>
            <h4 class="duty"><i>60070089</i></h4>                        
            <h4 class="duty"><i>Front-end</i></h4>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6 zoomin"> 
          <a href="https://web.facebook.com/nattawut.techasriburapha" target="_blank"><img src="{{asset( 'img/pic/frong.jpg' )}}" class="img-rounded" alt="Frong"width="200" height="200"style='padding:10px;background-color:white;hover:red;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);'></a>
            <h4><strong>ณัฐวุฒิ เตชะศรีบูรพา</strong></h4>
            <h4 class="duty"><i>60070025</i></h4>                                    
            <h4 class="duty"><i>Database</i></h4>
          </div>
          <div class="col-sm-6 zoomin">
          <a href="https://web.facebook.com/my.username.is.ken?_rdc=1&_rdr" target="_blank"><img src="{{asset( 'img/pic/ken.jpg' )}}" class="img-rounded" alt="ken"width="200" height="200"style='padding:10px;background-color:white;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);'></a>
            <h4><strong>ไอศูรย์ ทิมศรี</strong></h4>
            <h4 class="duty"><i>60070121</i></h4>
            <h4 class="duty"><i>Front-end</i></h4>
          </div>
        </div>
    </div>
</div>
<p id = "footer" align="center">&copy; งานท่วมหัว ทำตัวเหมือนว่าง</p>
		<!-- jQuery -->
        <script src="https://code.jquery.com/jquery.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
</body>
</html>