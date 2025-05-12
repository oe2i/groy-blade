@props(['key' => null])
@php
	if (!$key) {
		$key = EnvX::theme() . 'Theme';
	}
@endphp

			const theme = new Theme("{{$key}}");
