<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" style="border-radius: 0px;">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>								
			</div>
		
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse navbar-ex1-collapse">
				<ul class="nav navbar-nav">
					<li {{ Request::is('/index') ? ' class="active"' : null }}><a href="/">Board Games</a></li>
					<li {{ Request::is('/play') ? ' class="active"' : null }}><a href="/play">Play for Performance</a></li>
					<li class="dropdown">
						<a href="/suggest" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Suggested Games<b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li {{ Request::is('/suggest#Games_for_Beginner') ? ' class="active"' : null }}><a href="/suggest#Games_for_Beginner">Games for Newcomers</a></li>
							<li {{ Request::is('/suggest#Games_for_5-8_year-olds') ? ' class="active"' : null }}><a href="/suggest#Games_for_5-8_year-olds">Games for 5-8 year-olds</a></li>
							<li {{ Request::is('/suggest#Cooperative_Games') ? ' class="active"' : null }}><a href="/suggest#Cooperative_Games">Cooperative Games</a></li>
							<li {{ Request::is('/suggest#Games_for_Experienced_Players') ? ' class="active"' : null }}><a href="/suggest#Games_for_Experienced_Players">Games for Experienced Players</a></li>
							<li {{ Request::is('/suggest#Party_Games') ? ' class="active"' : null }}><a href="/suggest#Party_Games">Party Games</a></li>
						</ul>
					</li>
					<li {{ Request::is('/about') ? ' class="active"' : null }}><a href="/about">About Us</a></li>
				</ul>
				<form action="/game" method="post" class="search-form navbar-right" style="position: relative; top: 8px; right: 10px;">
                	{{ csrf_field() }}        
                	<div class="form-group has-feedback" style="">
								<label for="search" class="sr-only">Search</label>
								<input list="titles" type="text" class="form-control" name="search" id="search" placeholder="search">
									<span class="glyphicon glyphicon-search form-control-feedback"></span>
					</div>
				</form>
			</div>
        </nav>
        <datalist id="titles">
            @foreach($titles as $title)
            <option value="{{$title->title}}"></option>
            @endforeach
        </datalist>