@props([
	'href' => null,
	'rel' => 'stylesheet',
	'noscript' => false,

	'src' => null,
	'async' => false,
	'defer' => false,
	'crossorigin' => null
])

@if($href)
	<x-orio.link.css :href=$href :rel=$rel :noscript=$noscript vendor />
@endif

@if($src)
	<x-orio.link.js :src=$src :async=$async :defer=$defer :crossorigin=$crossorigin vendor />
@endif