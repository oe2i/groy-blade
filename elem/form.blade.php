@use ('Groy\Xeno\Http\RouteX')
@props([
	'method' => 'post',
	'action' => null,
	'name' => null,
	'id' => null,
	'class' => null,
])
@php
	$attributes = collect();

	if ($name) {
		$attributes[] = 'name="' . e($name) . '"';
	}

	if ($id) {
		$attributes[] = 'id="' . e($id) . '"';
	}

	if ($method) {
		$attributes[] = 'method="' . e($method) . '"';
	}

	if ($action) {
		if ($action === true) {
			$action = RouteX::hrefActive();
		}
		$action = RouteX::href($action);
		$attributes[] = 'action="' . e($action) . '"';
	}

	if ($class) {
		$attributes[] = 'class="' . e($class) . '"';
	}

	$attributes = $attributes->implode(' ');
@endphp
		<form {!! $attributes !!}>
			@csrf

			{{ $slot }}

		</form>
