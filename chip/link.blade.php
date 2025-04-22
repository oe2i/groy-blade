@use('Groy\Xeno\Http\RouteX')
@use('Groy\Xeno\Data\StringX')
@use('Groy\Spine\Core\VarX')
@props([
	'text' => null,
	'href',
	'param' => [],
	'absolute' => false,
	'class' => false,
	'title' => true,
	'navigate' => true,
])

@php
	$attributes = collect();

	if ($href) {
		$href = RouteX::href($href, $param, $absolute);
		$attributes[] = 'href="' . e($href) . '"';
	}

	if ($navigate) {
		$attributes->push('wire:navigate');
	}

	if ($class) {
		$attributes[] = 'class="' . e($class) . '"';
	}

	if (!$slot->isEmpty()){
		$content = $slot;
	} elseif (StringX::has()->something($text)) {
		$content = $text;
	}

	$content = !empty($content) ? $content : 'No Anchor';

	if (VarX::true($title) && !VarX::html($content)) {
		$title = $content;
	}

	if (VarX::notEmpty($title)) {
		$attributes[] = 'title="' . e($title) . '"';
	}

	$attributes = $attributes->implode(' ');
@endphp

<a {!! $attributes !!}>{!! $content !!}</a>
