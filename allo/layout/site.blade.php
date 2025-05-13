@props(['title' => null, 'page' => null, 'heading' => null, 'header' => true, 'footer' => true])

<!DOCTYPE html>
<html lang="en" class="not-ready">

	<head>

		<x-groy.orio.meta.chars />
		<x-groy.orio.meta.viewport />
		<x-groy.orio.meta.compatible />
		<x-groy.orio.meta.csrf />
		<x-groy.orio.elem.title :title=$title />
		<x-groy.orio.chunk.favicon type='png' mask="#222288" microsoft="#AAAAFF" />
		<x-groy.orio.link.js src="groy::theme-init" />
		<x-groy.orio.link.css href="groy::init" />
		<x-groy.orio.link.css href="groy::theme" />
		<x-groy.orio.link.css href="groy::layout" />
	</head>

	<body>

		@if($header)
			<header id="header">
				<div class="container">
					<div id="logo">
						<a href="{{ RouteX::href('home') }}">{{ ProjectX::alias() }}</a>
					</div>

					<button id="navToggle" aria-label="Toggle Navigation" class="nav-toggle anchor">☰</button>

					<nav id="navigation">
						<ul>
							<li><a href="{{ RouteX::href('home') }}">home</a></li>
							<li><a href="{{ RouteX::href('about') }}">about</a></li>
							<li><a href="{{ RouteX::href('contact') }}">contact</a></li>
							<li><a href="{{ RouteX::href('element') }}">element</a></li>

							@auth
								@if (Route::has('dashboard'))
									<li><a href="{{RouteX::href('dashboard')}}">dashboard</a></li>
								@endif
								@if (Route::has('logout'))
									<li><a href="{{RouteX::href('logout')}}">logout</a></li>
								@endif
							@else
								@if (Route::has('login'))
									<li><a href="{{RouteX::href('login')}}">login</a></li>
								@endif
								@if (Route::has('register'))
									<li><a href="{{RouteX::href('register')}}">register</a></li>
								@endif
							@endauth
							<li><a href="#" id="themeToggle" class="anchor">theme</a></li>
						</ul>
					</nav>
				</div>

			</header>
		@endif

		@if($heading)
			<section id="banner" class="container" role="banner">
				<h1 class="heading">{{ ucwords($heading) }}</h1>
			</section>
		@endif

		<main>
			<div class="container">
				{{ $slot }}
			</div>
		</main>

		@if($footer)
			<footer id="footer">
				<div class="container">
					<x-groy.orio.frag.copyright />
				</div>
			</footer>
		@endif


		<x-groy.orio.link.js src="orio" />
		<x-groy.orio.link.js src="groy::theme-toggle" />
		<x-groy.orio.link.js src="groy::nav" />

	</body>

</html>