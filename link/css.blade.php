@use('Groy\Xeno\Data\StringX')
@use('Groy\Xeno\Theme\AssetX')
@props([
	'href',
	'rel' => 'stylesheet',
	'noscript' => false,
	'preload' => false,
	'vendor' => false
])

@php
	$href = $vendor ? StringX::end()->ifNot($href, '.css') : $href;
	$finalHref = $vendor ? AssetX::vendor($href, false) : AssetX::css($href, false);
@endphp

@if($rel === 'preload' || $noscript)
	<link rel="preload" as="style" href="{{ $finalHref }}" onload="this.onload=null;this.rel='stylesheet'">
	@if($noscript)
		<noscript>
			<link rel="stylesheet" href="{{ $finalHref }}">
		</noscript>
	@endif
@else
	<link rel="{{ $rel }}" href="{{ $finalHref }}">
@endif