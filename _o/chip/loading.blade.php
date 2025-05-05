@props([
	'id' => 'loading',
	'preload' => true,
])

@php
	$preload = is_bool($preload) || empty($preload) ? 'Loading...' : $preload;
@endphp

<div id="{{ $id }}"><x-orio.chip.fa icon='spinner' class='fa-spin-pulse' />{{ $preload }}</div>
