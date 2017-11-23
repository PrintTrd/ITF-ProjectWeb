<!DOCTYPE html>
<html lang="">
  	<head>
		<title>Board Games</title>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  	</head>
  	<style>
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
  	</style>
  <body>
	
    @include('components.nav')
	<div id="carousel-id" class="carousel slide" data-ride="carousel" style="margin-top: -23px;">
			<ol class="carousel-indicators">
				<li data-target="#carousel-id" data-slide-to="0" class=""></li>
				<li data-target="#carousel-id" data-slide-to="1" class="active"></li>
				<li data-target="#carousel-id" data-slide-to="2" class=""></li>
			</ol>
			<div class="carousel-inner">
				<div class="item">
					<img data-src="holder.js/900x500/auto/#777:#7a7a7a/text:First slide" alt="First slide" src="{{asset( 'img/pic/tips-on-how-to-make-a-board-game.jpeg' )}}" align="center" style="width:100%; height:100%;">
					<div class="container">
						<div class="carousel-caption">
							<h1>Play for Performance</h1>
							<h3>7 Reasons Why You Should Be Playing Board Games</h3>
							<p><a class="btn btn-warning btn-lg" href="/play" role="button">Read More</a></p>
						</div>
					</div>
				</div>
				<div class="item active">
					<img data-src="holder.js/900x500/auto/#666:#6a6a6a/text:Second slide" alt="Second slide" src="{{asset( 'img/pic/chess_board-wallpaper-3554x1999.jpg' )}}" style="width:100%; height:100%;">
					<div class="container">
						<div class="carousel-caption">
							<h1>Choose Your Games</h1>
							<h3>Suggested Games For Each Level or Type of Games</h3>
							<p><a class="btn btn-warning btn-lg" href="/suggest" role="button">Choose</a></p>
						</div>
					</div>
				</div>
				<div class="item">
					<img data-src="holder.js/900x500/auto/#555:#5a5a5a/text:Third slide" alt="Third slide" src="{{asset( 'img/pic/pawn_chess_board-wallpaper-2560x1440.jpg' )}}" style="width:100%; height:100%;">
					<div class="container">
						<div class="carousel-caption">
							<h1>Team Developer</h1>
							<h3>Board games คือเว็บไซต์ที่ได้รวบรวมบอร์ดเกมส์ต่าง ๆ มากมาย ซึ่งประกอบไปด้วยรูปภาพและเนื้อหาตลอดจนเกมส์ที่แนะนำ เพื่อให้ง่ายต่อการสืบค้นหรือศึกษาสำหรับผู้ที่สนใจในบอร์ดเกมส์</h3>
							<p><a class="btn btn-warning btn-lg" href="/about" role="button">About Us</a></p>
						</div>
					</div>
				</div>
			</div>
			<a class="left carousel-control" href="#carousel-id" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
			<a class="right carousel-control" href="#carousel-id" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div>

		<!-- jQuery -->
	<script src="https://code.jquery.com/jquery.js"></script>
	<!-- Bootstrap JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  </body>
</html>
