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
		<!--<link rel="stylesheet" type="text/css" href="main.css">ถ้าเกิดจะทำcssอ่ะนะ-->
		
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
	body{text-align: center}

	</style>
  <body>
	<nav class="navbar navbar-inverse" role="navigation">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="index.html">Board Games</a>				
			</div>
		
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse navbar-ex1-collapse">
				<ul class="nav navbar-nav">
					<li><a href="index.html">Home</a></li>
                    <li><a href="Play for Performance.html">Play for Performance</a></li>
                    <li class="dropdown active">
						<a href="Suggested Games.html" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Suggested Games<b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="Suggested Games.html">Games for Newcomers</a></li>
							<li><a href="#">Games for 5-8 year-olds</a></li>
							<li><a href="#">Cooperative Games</a></li>
							<li><a href="#">Games for Experienced Players</a></li>
							<li><a href="#">Party Games</a></li>
						</ul>
					</li>
					<li><a href="About.html">About Us</a></li>
				</ul>
				<form action="" class="search-form navbar-right" style="position: relative; top: 8px; right: 10px;">
						<div class="form-group has-feedback" style="">
							<label for="search" class="sr-only">Search</label>
							<input type="text" class="form-control" name="search" id="search" placeholder="search">
								<span class="glyphicon glyphicon-search form-control-feedback"></span>
						</div>
					</form>
			</div>
	</nav>
    <div class="container">
		<h1><strong>SUGGESTED <span style='color:red'>GAMES<span></strong></h1><br>
		<!--row1-->
		<div class="row">
			<div class="col-sm-3">
				<img data-src="holder.js/500x200" class="img-thumbnail" alt="Ticket to Ride" style="width: 300px; height: 300px;" src="https://www.morethanagamecafe.com/wp-content/uploads/2015/01/TicketToRide_1.jpg" data-holder-rendered="true">
				<h4>Ticket to Ride</h4>
				<p>Build a railroad empire! Justifiably many people’s favorite game.</p>
			</div>
		
			<div class="col-sm-3">
				<img data-src="holder.js/500x200" class="img-thumbnail" alt="Coup" style="width: 300px; height: 300px;" src="https://www.morethanagamecafe.com/wp-content/uploads/2014/12/coup_1.jpg" data-holder-rendered="true">
				<h4>Coup</h4>
				<p>Bluff and Dare your way to victory! Very popular with all our customers, from schoolkids to experienced gamers.</p>
			</div>
			<div class="col-sm-3">
				<img data-src="holder.js/500x200" class="img-thumbnail" alt="Dixit" style="width: 300px; height: 300px;" src="https://www.morethanagamecafe.com/wp-content/uploads/2014/12/dixit_-_new-1.jpg" data-holder-rendered="true">
				<h4>Dixit</h4>
				<p>Fast, fun, and easy to learn, this game uses fantastical artwork to create an interesting, fun, and memorable experience.</p>
			</div>
			<div class="col-sm-3">
				<img data-src="holder.js/500x200" class="img-thumbnail" alt="King of Tokyo" style="width: 300px; height: 300px;" src="https://www.morethanagamecafe.com/wp-content/uploads/2016/03/king-of-tokyo.jpg" data-holder-rendered="true">
				<h4>King of Tokyo</h4>
				<p>Be the last giant monster standing in the ruins of Tokyo! A fast and monstrously fun game.</p>
			</div>
		</div>

		<!--row2-->
		<div class="row">
			<div class="col-sm-3" >
				<img data-src="holder.js/500x200" class="img-thumbnail "  alt="Carcassonne" style="width: 300px; height: 300px;" src="https://www.morethanagamecafe.com/wp-content/uploads/2015/01/carcassonne_ZMG2014_1.jpg" data-holder-rendered="true">
				<h4>Carcassonne</h4>
				<p>Build a medieval countryside in this fast and fun tile-laying game.</p>
			</div>
		
			<div class="col-sm-3">
				<img data-src="holder.js/500x200" class="img-thumbnail" alt="Fun Farm" style="width: 300px; height: 300px;" src="https://www.morethanagamecafe.com/wp-content/uploads/2015/05/fun_farm_01.jpg" data-holder-rendered="true">
				<h4>Fun Farm</h4>
				<p>Match the fun, friendly animals to cards, in this pattern-matching game that is great fun.</p>
			</div>
			<div class="col-sm-3">
				<img data-src="holder.js/500x200" class="img-thumbnail" alt="Master Fox" style="width: 300px; height: 300px;" src="https://www.morethanagamecafe.com/wp-content/uploads/2015/08/xmaster-fox-510x509.jpg.pagespeed.ic.E0JX3Fyga6.webp" data-holder-rendered="true">
				<h4>Master Fox</h4>
				<p>Blindly grasp figurines in a box as you try to steal the best loot.</p>
			</div>
			<div class="col-sm-3">
				<img data-src="holder.js/500x200" class="img-thumbnail" alt="Candy" style="width: 300px; height: 300px;" src="https://www.morethanagamecafe.com/wp-content/uploads/2016/01/candy-limited-edition.jpg" data-holder-rendered="true">
				<h4>Candy</h4>
				<p>A classic game (50 years!) of finding the candies that match the colors on the dice.</p>
			</div>
		</div>

		<!--row3-->
		<div class="row">
			<div class="col-sm-3" >
				<img data-src="holder.js/500x200" class="img-thumbnail "  alt="Pandemic" style="width: 300px; height: 300px;" src="https://www.morethanagamecafe.com/wp-content/uploads/2014/12/xBFI_Pandemic_2013e-510x510.jpg.pagespeed.ic.IwIuGrXTYt.webp" data-holder-rendered="true">
				<h4>Pandemic</h4>
				<p>The new classic – work as a team to save the world from horrible plagues! Not easy, but a lot of fun.</p>
			</div>
		
			<div class="col-sm-3">
				<img data-src="holder.js/500x200" class="img-thumbnail" alt="Dead of Winter" style="width: 300px; height: 300px;" src="https://www.morethanagamecafe.com/wp-content/uploads/2015/04/xdead_of_winter_1-510x510.jpg.pagespeed.ic.BOhhak-em6.webp" data-holder-rendered="true">
				<h4>Dead of Winter</h4>
				<p>Players are a group of survivors in a Zombie apocalypse, and have to … mostly … cooperate to survive. Hugely popular.</p>
			</div>
			<div class="col-sm-3">
				<img data-src="holder.js/500x200" class="img-thumbnail" alt="Pandemic: The Cure" style="width: 300px; height: 300px;" src="https://www.morethanagamecafe.com/wp-content/uploads/2015/01/xpandemic_cure_1-510x510.jpg.pagespeed.ic.pwEWaCFn-D.webp" data-holder-rendered="true">
				<h4>Pandemic: The Cure</h4>
				<p>A faster, dice-based version of the cooperative classic, Pandemic.</p>
			</div>
			<div class="col-sm-3">
				<img data-src="holder.js/500x200" class="img-thumbnail" alt="Pandemic Legacy: Season 1" style="width: 300px; height: 300px;" src="https://www.morethanagamecafe.com/wp-content/uploads/2015/11/xpandemic-legacy-blue.png.pagespeed.ic.mkJD-6moQJ.webp" data-holder-rendered="true">
				<h4>Pandemic Legacy: Season 1</h4>
				<p>This is an episodic version of the classic game Pandemic – each time you play it effects the next time you play.</p>
			</div>
		</div>
	</div>

		<!-- jQuery -->
	<script src="https://code.jquery.com/jquery.js"></script>
	<script src="//code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
	<!-- Bootstrap JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
	-	<script src="Hello World"></script>
	<p id = "footer" align="center">&copy; งานท่วมหัว ทำตัวเหมือนว่าง</p>
  </body>
</html>
