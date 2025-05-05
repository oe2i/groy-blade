@props(['href' => 'favicon.ico', 'rel' => 'icon', 'type' => 'image/x-icon'])

@php
	if (StrEndX::with($href, '.png') || $type === 'png') {
		$type = 'image/png';
	}

	if ($type === 'image/png') {
		$href = StrSwapX::ico2png($href);
	}
@endphp

		<link rel="{{ $rel }}" type="{{ $type }}" href="{{ AssetX::favicon($href, false) }}">
