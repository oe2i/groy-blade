@props(['href' => null, 'rel' => 'stylesheet', 'noscript' => false, 'preload' => false, 'vendor' => false])

@php

	if (StrBeginX::with($href, 'orio::')) {
		$href = 'orio/' . StrCropX::begin($href, 'orio::');
	}

	if ($href === 'orio') {
		$href = 'orio/orio.css';
	}

	if (!$href) {
		$href = EnvX::theme();
	}

	$href = $vendor ? StrEndX::ifNot($href, '.css') : $href;
	$finalHref = $vendor ? AssetX::vendor($href, false) : AssetX::css($href, false);
@endphp

@if ($rel === 'preload' || $noscript || $preload)
	<link rel="preload" as="style" href="{{ $finalHref }}" onload="this.onload=null;this.rel='stylesheet'">
	@if ($noscript)
		<noscript>
			<link rel="stylesheet" href="{{ $finalHref }}">
		</noscript>
	@endif
@else
	<link rel="{{ $rel }}" href="{{ $finalHref }}">
@endif