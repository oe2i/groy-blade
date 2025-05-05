@props(['src' => null, 'alt' => null, 'title' => null, 'loading' => 'eager'])
@php
	$logo = FileIsX::logo($src, true);

	if (!$logo) {
		return FileX::error('missing logo', FileOrganizeX::logo($src));
	}

	if (!$alt) {
		$alt = ProjectX::alias();
	}

	if (!$title) {
		$title = ProjectX::name();
	}
@endphp

<x-orio.omi.elem.image :src=$logo :loading=$loading :title=$title />