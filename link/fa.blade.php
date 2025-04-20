@use('Groy\Xeno\Data\StringX')
@use('Groy\Xeno\Theme\AssetX')
@props(['href' => null, 'src' => null])

@if($href)
	@php
		$href = StringX::begin()->ifNot($href, 'css/');
		$href = StringX::end()->ifNot($href, '.css');
	@endphp
	<link rel="stylesheet" href="{{ AssetX::fa($href, false) }}">
@endif

@if($src)
	@php
		$src = StringX::begin()->ifNot($src, 'js/');
		$src = StringX::end()->ifNot($src, '.js');
	@endphp
	<script type="text/javascript" src="{{ AssetX::fa($src, false) }}"></script>
@endif