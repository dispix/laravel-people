<div class="row">
	<header>
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a href="{{ route('home') }}"><h2 class="navbar-brand">Laravel People</h2></a>
				</div>
				<div class="collapse navbar-collapse" id="navbar">
					<ul class="nav navbar-nav">
						<li {{ (Route::is('home') ? 'class="active"' : '') }}>
							<a href="{{ route('home') }}">Home</a>
						</li>
						<li {{ (Route::is('people') ? 'class="active"' : '') }}>
							<a href="{{ route('people') }}">People</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	</header>
</div>