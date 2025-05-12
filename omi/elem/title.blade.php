@props(['title' => null, 'secondary' => null, 'preload' => false, 'format' => true, 'orio' => true])
@php
	if ($orio) {
		$title = OrioX::title($title, $secondary);
	} elseif ($format) {
		$title = FormatX::title($title);
	}
@endphp

@if ($preload)
	@php
		$preload = is_bool($preload) || empty($preload) ? 'Loading...' : $preload;
	@endphp

	<title o-title="{{ $title }}">{{ $preload }}</title>
@else
	<title>{{ $title }}</title>
@endif