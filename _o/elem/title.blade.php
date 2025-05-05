@props(['title', 'preload' => false, 'page' => null])

@if ($preload)
	@php
		$preload = is_bool($preload) || empty($preload) ? 'Loading...' : $preload;
	@endphp

	<title o-title="{{ $title }}">{{ $preload }}</title>
@else
	<title>{{ $title }}</title>
@endif
