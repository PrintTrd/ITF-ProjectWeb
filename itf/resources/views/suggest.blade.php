<!DOCTYPE html>
<html lang="">
  <head>
		<title>Board Games</title>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<style>p.none {border-style: none;}</style>
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

	@include('components.nav')
	  
	<div class="container" style="margin-top: 70px;" id="Games_for_Beginner">
		<div class="page-header">
  			<h1>Games for Beginner</h1>
		</div>
		<div class="col-xs-12 col-md-6">
			<h4>Ticket to Ride </h4>
			<img data-src="{{asset( 'holder.js/500x200' )}}" class="img" alt="500x200" style="max-width:100%;height:auto;" src="https://www.morethanagamecafe.com/wp-content/uploads/2015/01/xTicketToRide_1-510x510.jpg.pagespeed.ic.-ldmBEhW56.jpg" data-holder-rendered="true" id="img" href="">
			<p>Build a railroad empire! Justifiably many people’s favorite game.</p>
		</div>
		<div class="col-xs-12 col-md-6">
				<h4>Coup</h4>
				<img data-src="{{asset( 'holder.js/500x200' )}}" class="img" alt="500x200" style="max-width:100%;height:auto;" src="https://www.morethanagamecafe.com/wp-content/uploads/2014/12/xcoup_1.jpg.pagespeed.ic.yGsRotalJy.jpg" data-holder-rendered="true">
				<p>Bluff and Dare your way to victory! Very popular with all our customers, from schoolkids to experienced gamers.</p>
		</div>
		<div class="col-xs-12 col-md-6">
				<h4>Dixit </h4>
				<img data-src="{{asset( 'holder.js/500x200' )}}" class="img" alt="500x200" style="max-width:100%;height:auto;" src="https://www.morethanagamecafe.com/wp-content/uploads/2014/12/xdixit_-_new-1-510x510.jpg.pagespeed.ic.nrmbeD120N.jpg" data-holder-rendered="true">
				<p>Fast, fun, and easy to learn, this game uses fantastical artwork to create an interesting, fun, and memorable experience.</p>
		</div>
		<div class="col-xs-12 col-md-6">
				<h4>King of Tokyo</h4>
				<img data-src="{{asset( 'holder.js/500x200') }}" class="img" alt="500x200" style="max-width:100%;height:auto;" src="https://www.morethanagamecafe.com/wp-content/uploads/2016/03/xking-of-tokyo-510x524.jpg.pagespeed.ic.kd26choVwv.jpg" data-holder-rendered="true">
				<p>Be the last giant monster standing in the ruins of Tokyo! A fast and monstrously fun game.</p>
		</div>
		<div class="col-xs-12 col-md-6">
				<h4>Carcassonne</h4>
				<img data-src="{{asset( 'holder.js/500x200' )}}" class="img" alt="500x200" style="max-width:100%;height:auto;" src="https://www.morethanagamecafe.com/wp-content/uploads/2015/01/xcarcassonne_ZMG2014_1-510x510.jpg.pagespeed.ic.h3ajoDyKpY.jpg" data-holder-rendered="true">
				<p>Build a medieval countryside in this fast and fun tile-laying game.</p>
		</div>
		<div class="col-xs-12 col-md-6">
				<h4>Splendor</h4>
				<img data-src="{{asset( 'holder.js/500x200' )}}" class="img" alt="500x200" style="max-width:100%;height:auto;" src="https://www.morethanagamecafe.com/wp-content/uploads/2015/01/xsplendor_1-510x510.jpg.pagespeed.ic.bnsCOeRpuO.jpg" data-holder-rendered="true">
				<p>As gem merchants in the Renaissance, you race to acquire prestige. Fun and easy to learn, this relatively new game is already considered a classic.</p>
		</div>
	</div>
    <div class="container" id="Games_for_5-8_year-olds" style="margin-top: 70px;">
		<div class="page-header">
				<h1>Games for 5-8 year-olds</h1>
		</div>
		<div class="col-xs-12 col-md-6">
			<h4>Spinderella</h4>
			<img data-src="{{asset( 'holder.js/500x200' )}}" class="img" alt="500x200" style="max-width:100%;height:auto;" src="https://www.morethanagamecafe.com/wp-content/uploads/2016/01/spinderella.jpg.pagespeed.ce.UNn53UCN3-.jpg" data-holder-rendered="true">
			<p>Last year’s Kinderspiel des Jahres (Childrens game) winner, this is a fun game for all ages.</p>
		</div>
		<div class="col-xs-12 col-md-6">
				<h4>Fun Farm</h4>
				<img data-src="{{asset( 'holder.js/500x200' )}}" class="img" alt="500x200" style="max-width:100%;height:auto;" src="https://www.morethanagamecafe.com/wp-content/uploads/2015/05/xfun_farm_01-510x510.jpg.pagespeed.ic.iGZOIpc2Q3.jpg" data-holder-rendered="true">
				<p>Match the fun, friendly animals to cards, in this pattern-matching game that is great fun.</p>
		</div>
	</div>
	<div class="container" id="Cooperative_Games" style="margin-top: 70px;">
			<div class="page-header">
					<h1>Cooperative Games</h1>
			</div>
		<div class="col-xs-12 col-md-6">
			<h4>Pandemic</h4>
			<img data-src="{{asset( 'holder.js/500x200' )}}" class="img" alt="500x200" style="max-width:100%;height:auto;" src="https://www.morethanagamecafe.com/wp-content/uploads/2014/12/xBFI_Pandemic_2013e-510x510.jpg.pagespeed.ic.oC6GpuXjsK.jpg" data-holder-rendered="true">
			<p>The new classic – work as a team to save the world from horrible plagues! Not easy, but a lot of fun.</p>
		</div>
		<div class="col-xs-12 col-md-6">
				<h4>Dead of Winter</h4>
				<img data-src="{{asset( 'holder.js/500x200' )}}" class="img" alt="500x200" style="max-width:100%;height:auto;" src="https://www.morethanagamecafe.com/wp-content/uploads/2015/04/xdead_of_winter_1-510x510.jpg.pagespeed.ic.k5HqYPQNju.jpg" data-holder-rendered="true">
				<p>Players are a group of survivors in a Zombie apocalypse, and have to … mostly … cooperate to survive. Hugely popular.</p>
		</div>
		<div class="col-xs-12 col-md-6">
				<h4>Pandemic: The Cure</h4>
				<img data-src="{{asset( 'holder.js/500x200' )}}" class="img" alt="500x200" style="max-width:100%;height:auto;" src="https://www.morethanagamecafe.com/wp-content/uploads/2015/01/xpandemic_cure_1-510x510.jpg.pagespeed.ic.yEkf1jncPp.jpg" data-holder-rendered="true">
				<p>A faster, dice-based version of the cooperative classic, Pandemic.</p>
		</div>
		<div class="col-xs-12 col-md-6">
				<h4>Ghost Stories</h4>
				<img data-src="{{asset( 'holder.js/500x200' )}}" class="img" alt="500x200" style="max-width:100%;height:auto;" src="https://www.morethanagamecafe.com/wp-content/uploads/2015/08/xghost-stories-510x510.jpg.pagespeed.ic.j6JQIvpvFr.jpg" data-holder-rendered="true">
				<p>Work together to save a town from an ancient Chinese devil.</p>
		</div>
		<div class="col-xs-12 col-md-6">
				<h4>Robinson Crusoe - Adventures on the Cursed Island</h4>
				<img data-src="{{asset( 'holder.js/500x200' )}}" class="img" alt="500x200" style="max-width:100%;height:auto;" src="https://www.morethanagamecafe.com/wp-content/uploads/2015/02/xrobinson_1-510x510.jpg.pagespeed.ic.yD4S-w1-Cb.jpg" data-holder-rendered="true">
				<p>A cooperative survival game where players are stranded on a mysterious island…</p>
		</div>
		<div class="col-xs-12 col-md-6">
				<h4>Time Stories</h4>
				<img data-src="{{asset( 'holder.js/500x200' )}}" class="img" alt="500x200" style="max-width:100%;height:auto;" src="https://www.morethanagamecafe.com/wp-content/uploads/2016/01/time-stories.png.pagespeed.ce.DynalpL3Y2.png" data-holder-rendered="true">
				<p>A cooperative time-travel adventure game with many expansions.</p>
		</div>
	</div>
	<div class="container" id="Games_for_Experienced_Players" style="margin-top: 70px;">
		<div class="page-header">
				<h1>Games for Experienced Players</h1>
		</div>
		<div class="col-xs-12 col-md-6">
			<h4>Power Grid</h4>
			<img data-src="{{asset( 'holder.js/500x200' )}}" class="img" alt="500x200" style="max-width:100%;height:auto;" src="https://www.morethanagamecafe.com/wp-content/uploads/2015/01/xpower_grid_1-510x510.jpg.pagespeed.ic.WUX8LaeyUc.jpg" data-holder-rendered="true">
			<p>Bring power to an entire country! Fascinating supply/demand model.</p>
		</div>
		<div class="col-xs-12 col-md-6">
				<h4>Pandemic</h4>
				<img data-src="{{asset( 'holder.js/500x200' )}}" class="img" alt="500x200" style="max-width:100%;height:auto;" src="https://www.morethanagamecafe.com/wp-content/uploads/2014/12/xBFI_Pandemic_2013e-510x510.jpg.pagespeed.ic.oC6GpuXjsK.jpg" data-holder-rendered="true">
				<p>The new classic – work as a team to save the world from horrible plagues! Not easy, but a lot of fun.</p>
		</div>
		<div class="col-xs-12 col-md-6">
				<h4>Game of Thrones</h4>
				<img data-src="{{asset( 'holder.js/500x200' )}}" class="img" alt="500x200" style="max-width:100%;height:auto;" src="https://www.morethanagamecafe.com/wp-content/uploads/2015/01/xGame_of_Thrones_2nd_01.jpg.pagespeed.ic.uLFR1S00ns.jpg" data-holder-rendered="true">
				<p>The armies of Westeros are on the move … but treachery wins as many battles as armies! Great fun, but fairly complex and takes several hours to play.</p>
		</div>
		<div class="col-xs-12 col-md-6">
				<h4>Agricola</h4>
				<img data-src="{{asset( 'holder.js/500x200' )}}" class="img" alt="500x200" style="max-width:100%;height:auto;" src="https://www.morethanagamecafe.com/wp-content/uploads/2015/01/xagricola_1-510x510.jpeg.pagespeed.ic.ZAFwMp8GlJ.jpg" data-holder-rendered="true">
				<p>Agricola is a ‘the’ worker placement game, where you need to build up a farm with limited worker resources.</p>
		</div>
		<div class="col-xs-12 col-md-6">
				<h4>Twilight Struggle</h4>
				<img data-src="{{asset( 'holder.js/500x200' )}}" class="img" alt="500x200" style="max-width:100%;height:auto;" src="https://www.morethanagamecafe.com/wp-content/uploads/2015/01/xtwilight_struggle_deluxe_1-510x510.jpg.pagespeed.ic.9HPIFqNUd0.jpg" data-holder-rendered="true">
				<p>Two player game about the Cold Wat between the US and USSR. Not too overly complex, but often takes 3 hours to play.</p>
		</div>
		<div class="col-xs-12 col-md-6">
				<h4>Terra Mystica</h4>
				<img data-src="{{asset( 'holder.js/500x200' )}}" class="img" alt="500x200" style="max-width:100%;height:auto;" src="https://www.morethanagamecafe.com/wp-content/uploads/2014/12/xBFI_Terra_Mystica-510x510.jpg.pagespeed.ic.hWav7H59W-.jpg" data-holder-rendered="true">
				<p>A strategy game that has little luckand rewards strategic planning, players are one of 14 tribes, each assiciated with one of seven different terrains. Games last from one to three hours.</p>
		</div>
	</div>
	<div class="container" id="Party_Games" style="margin-bottom: 70px;">
		<div class="page-header">
				<h1>Party Games</h1>
		</div>
		<div class="col-xs-12 col-md-6">
				<h4>Resistance</h4>
				<img data-src="holder.js/500x200" class="img" alt="500x200" style="max-width:100%;height:auto;" src="https://www.morethanagamecafe.com/wp-content/uploads/2015/07/xthe-resistance-3e-510x679.jpg.pagespeed.ic.OrCap4k08m.jpg" data-holder-rendered="true">
				<p>The Resistance group against the evil repressive government has been infiltrated with spies. Can the brave resistance fighters topple the government before the spies destroy the group? For 5 – 10 players.</p>
		</div>
		<div class="col-xs-12 col-md-6">
			<h4>Codenames</h4>
			<img data-src="holder.js/500x200" class="img" alt="500x200" style="max-width:100%;height:auto;" src="https://www.morethanagamecafe.com/wp-content/uploads/2016/04/xcodenames-510x731.jpg.pagespeed.ic.7ZmOAT-eaQ.jpg" data-holder-rendered="true">
			<p>Two teams compete to identify thier agents, based on word-association clues. Unexpectedly fun.</p>
		</div>		
		<div class="col-xs-12 col-md-6">
				<h4>Cash & Guns</h4>
				<img data-src="holder.js/500x200" class="img" alt="500x200" style="max-width:100%;height:auto;" src="https://www.morethanagamecafe.com/wp-content/uploads/2014/12/xBFI_CashAndGun-510x579.jpg.pagespeed.ic.sLYspwkBkG.jpg" data-holder-rendered="true">
				<p>Up to 8 members of a mafia gang have just pulled off a heist. Who gets how much of the loot? Its everyone against everyone else in this riotous game of greed and double-cross.</p>
		</div>
		<div class="col-xs-12 col-md-6">
				<h4>Ultimate Werewolf</h4>
				<img data-src="{{asset( 'holder.js/500x200' )}}" class="img" alt="500x200" style="max-width:100%;height:auto;" src="https://www.morethanagamecafe.com/wp-content/uploads/2015/01/xwerewolf_deluxe_1-510x510.png.pagespeed.ic.tWWvB1YU8R.jpg" data-holder-rendered="true">
				<p>A peaceful village has been infiltrated by Werewolves – can the villagers identify and get rid of the werewolves before they destroy the village? A game for 5 – 68 players.</p>
		</div>
	</div>

	<script>
			$(document).ready(function(){
				// Add scrollspy to <body>
				$('body').scrollspy({target: ".navbar", offset: 50});   
			
				// Add smooth scrolling on all links inside the navbar
				$("nav a").on('click', function(event) {
				// Make sure this.hash has a value before overriding default behavior
				if (this.hash !== "") {
					// Prevent default anchor click behavior
					event.preventDefault();
			
					// Store hash
					var hash = this.hash;
			
					// Using jQuery's animate() method to add smooth page scroll
					// The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
					$('html, body').animate({
					scrollTop: $(hash).offset().top-$("nav").outerHeight()
					}, 800, function(){
				
					// Add hash (#) to URL when done scrolling (default click behavior)
					// window.location.hash = hash;
					});
				}  // End if
				});
			});
	</script>

	<p id = "footer" align="center">&copy; งานท่วมหัว ทำตัวเหมือนว่าง</p>
  </body>
</html>