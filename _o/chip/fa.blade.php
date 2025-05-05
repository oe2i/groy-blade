@props(['icon', 'type' => 'solid', 'title' => '', 'span' => 'px-1', 'class' => ''])

@php
	$icon = 'fa-' . $icon;
	$type = 'fa-' . $type;
	if (empty($class)) {
		$class = 'fa-fw';
	}

	$class = $type . ' ' . $icon . ' ' . $class;

	$attributes = collect();

	if (!empty($class)) {
		$attributes[] = 'class="' . e($class) . '"';
	}

	if (!empty($title)) {
		$attributes[] = 'title="' . e($title) . '"';
	}

	$attributes = $attributes->implode(' ');
@endphp

<span style="display: inline-block, margin-bottom: -2px;"@if($span) class="{{ $span }}"@endif><i {!! $attributes !!}></i></span>