@use('Groy\Xeno\Data\StringX')
@use('Groy\Xeno\Theme\AssetX')
@props(['href' => null, 'rel' => 'icon', 'sizes' => null])

@if (StringX::end()->with($href, '.svg'))
	<link rel="icon" type="image/svg+xml" href="{{ AssetX::favicon($href) }}">
@elseif ($rel === 'apple' || $rel === 'apple-touch-icon')
	<link rel="apple-touch-icon" sizes="{{ $sizes ?? '120x120' }}" href="{{ AssetX::favicon($href ?? 'apple-touch-icon.png', false) }}">
@elseif (StringX::begin()->with($rel, 'icon-'))
	@php
		if ($rel === 'icon-16') {
			$sizes = $sizes ?? '16x16';
			$href = $href ?? 'favicon-16x16.png';
		}
		if ($rel === 'icon-32') {
			$sizes = $sizes ?? '32x32';
			$href = $href ?? 'favicon-32x32.png';
		}
	@endphp
	<link rel="icon" type="image/png" sizes="{{ $sizes }}" href="{{ AssetX::favicon($href, false) }}">
@endif