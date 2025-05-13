@props(['src' => null, 'alt' => null, 'title' => null, 'loading' => 'lazy'])
@php
	$attributes = collect();

	if($src){
		$src = FileX::format($src, 'ps');
	}

	OrioX::setAttr(compact('src'), $attributes);

	if (!$alt && $src) {
		$alt = ucwords(FileX::name($src));
	}

	OrioX::setAttr(compact('alt'), $attributes);
	OrioX::setAttr(compact('title'), $attributes);
	OrioX::setAttr(compact('loading'), $attributes);

	$attributes = $attributes->implode(' ');
@endphp

<img {!! $attributes !!}>