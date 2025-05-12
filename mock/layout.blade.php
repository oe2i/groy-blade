@props(['slot', 'title' => ''])
@php
	$project = new ProjectX;
@endphp

<div class="container">

	<header>
		<h1>{{ $project::name() }}</h1>
		<span><em>{{$project::summary()}}</em></span>

		<nav>
			<ul>
				<li><a href="/">home</a></li>
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
	</header>

	<main>

		<h2>{{ ucwords($title) }}</h2>

		<section>
			{{ $slot }}
		</section>

	</main>

</div>