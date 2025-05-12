@props(['name', 'label' => null, 'placeholder' => null, 'type' => 'text'])
@php
	if ($name === 'email') {
		$type = 'email';
		$label = 'email address';
	}
	if ($name === 'password' || $name === 'password_confirmation') {
		$type = 'password';
	}
	if(!$label && $name)
	{
		$label = $name;
	}
	if (!$placeholder && $name) {
		$placeholder = 'Your '.$label.'...';
	}
@endphp
<div>
	<label for="{{ $name }}">{{ ucwords($label) }}:</label>
	<input type="{{ $type }}" id="{{ $name }}" name="{{ $name }}" placeholder="{{ $placeholder }}">
</div>