@props(['color', 'image' => null])

@if($image)
	<meta name="msapplication-TileImage" content="{{$image}}">
@endif

<meta name="msapplication-TileColor" content="{{ $color }}">
<meta name="theme-color" content="{{ $color }}">
