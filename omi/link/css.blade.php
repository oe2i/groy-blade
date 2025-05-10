@props(['href' => null, 'rel' => 'stylesheet', 'noscript' => false, 'preload' => false, 'vendor' => false])

@php

	if (!$href) {
		$href = EnvX::theme();
	}

	$orioHref = OrioX::asset($href);
	if ($orioHref) {
		$finalHref = $orioHref;
	} else {
		$finalHref = $vendor ? AssetX::vendor($href, false) : AssetX::css($href, false);
	}

	$finalHref = StrEndX::ifNot($finalHref, '.css');
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