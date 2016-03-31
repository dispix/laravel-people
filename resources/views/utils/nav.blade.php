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
					<h1 class="navbar-brand">{{ isset($title) ? $title : 'People'}}</h1>
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