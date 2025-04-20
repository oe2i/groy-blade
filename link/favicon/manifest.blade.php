@use('Groy\Xeno\Theme\AssetX')
@props(['href' => 'site.webmanifest', 'rel' => 'manifest'])

<link rel="{{ $rel }}" href="{{ AssetX::favicon($href, false) }}">
