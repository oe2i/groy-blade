@use('Groy\Xeno\Data\StringX')
@use('Groy\Xeno\Theme\AssetX')
@props([
	'src',
	'async' => false,
	'defer' => false,
	'crossorigin' => null,
	'type' => 'text/javascript',
	'vendor' => false
])

@php
	$attributes = collect();

	if ($type) {
		$attributes[] = 'type="' . e($type) . '"';
	}

	if ($async) {
		$attributes->push('async');
	}

	if ($defer) {
		$attributes->push('defer');
	}

	if ($crossorigin) {
		if (StringX::has()->nothing($crossorigin)) {
			$crossorigin = 'anonymous';
		}
		$attributes[] = 'crossorigin="' . e($crossorigin) . '"';
	}

	$attributes = $attributes->implode(' ');

	$src = $vendor ? StringX::end()->ifNot($src, '.js') : $src;
	$finalSrc = $vendor ? AssetX::vendor($src, false) : AssetX::js($src, false);
@endphp

<script {!! $attributes !!} src="{{ $finalSrc }}"></script>
