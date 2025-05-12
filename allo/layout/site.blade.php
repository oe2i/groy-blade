@props(['title', 'page' => null, 'heading' => null])

<!DOCTYPE html>
<html lang="en" o-theme="dark">

	<head>

		<x-orio.orio.meta.chars />

	</head>

	<body>

		<header>
			<div class="container">
				<div id="logo">
					Logo!
				</div>

				<nav>
					<ul>
						<li><a href="{{ RouteX::href('home') }}">home</a></li>
						<li><a href="{{ RouteX::href('about') }}">about</a></li>
						<li><a href="{{ RouteX::href('contact') }}">contact</a></li>
						<li><a href="{{ RouteX::href('html') }}">html</a></li>

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
						<li><a href="javascript:void(0)" onclick="theme.toggle()">toggle</a></li>
					</ul>
				</nav>

			</div>
		</header>

		<section id="banner" class="container" role="banner">
			@if($heading)
				<h1 class="heading">{{ ucwords($heading) }}</h1>
			@endif
		</section>

		<main>
			<div class="container">
				{{ $slot }}
			</div>
		</main>

		<footer>
			<div class="container">
				<x-groy.orio.frag.copyright />
			</div>
		</footer>

	</body>

</html>