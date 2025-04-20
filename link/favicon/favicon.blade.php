@use('Groy\Xeno\Data\StringX')
@use('Groy\Xeno\Theme\AssetX')
@props(['href' => 'favicon.ico', 'rel' => 'icon', 'type' => 'image/x-icon'])

@php
	if (StringX::end()->with($href, '.png') || $type === 'png') {
		$type = 'image/png';
	}
	if ($type === 'image/png') {
		$href = StringX::swap()->ico2png($href);
	}
@endphp

<link rel="{{$rel}}" type="{{$type}}" href="{{AssetX::favicon($href, false)}}">
