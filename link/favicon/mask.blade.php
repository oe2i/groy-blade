@use('Groy\Xeno\Theme\AssetX')
@props(['href' => 'safari-pinned-tab.svg', 'rel' => 'mask-icon', 'color' => '#ffffff'])

<link rel="{{ $rel }}" href="{{ AssetX::favicon($href, false) }}" color="{{ $color }}">
