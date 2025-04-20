@use('Groy\Xeno\Theme\AssetX')
@props(['href', 'noscript' => false])

<link rel="preload" as="style" href="{{ AssetX::css($href) }}" onload="this.onload=null;this.rel='stylesheet'">

@if($noscript)
	<noscript>
		<link rel="stylesheet" href="{{ AssetX::css($href) }}">
	</noscript>
@endif