@props(['href' => null, 'rel' => 'stylesheet', 'noscript' => false, 'preload' => false, 'vendor' => false])

@php
	if (!$href) {
		$href = EnvX::theme();
	}

	$orioHref = OrioX::asset($href, 'css');
	if ($orioHref) {
		$finalHref = $orioHref;
	} else {
		$finalHref = $vendor ? AssetX::vendor($href, false) : AssetX::css($href, false);
	}

	$finalHref = StrEndX::ifNot($finalHref, '.css');
	if(!EnvX::prod() && !empty($finalHref)){
		$finalHref .= '?'.mt_rand();
	}
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