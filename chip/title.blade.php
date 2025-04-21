@props(['title', 'preload' => false])

@if ($preload)
	@php
		$preload = is_bool($preload) || empty($preload) ? 'Loading...' : $preload;
	@endphp

	<title orio-title="{{ $title }}">{{ $preload }}</title>
@else
	<title>{{ $title }}</title>
@endif
