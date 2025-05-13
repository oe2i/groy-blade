@props(['method' => 'post', 'action' => true, 'name' => null, 'id' => null, 'class' => null])
@php
	$attributes = OrioX::initAttr();

	if ($action === true) {
		$action = RouteX::hrefActive();
	}
	$action = RouteX::href($action);

	if (!$name && $action) {
		$name = StrSwapX::ps($action, ' ');
		$name = StrWordX::first($name);
	}
	if ($name && !$id) {
		$id = $name;
		$id = StrEndX::ifNot($id, 'Form');
	}

	OrioX::setAttr(compact('name'), $attributes);
	OrioX::setAttr(compact('id'), $attributes);
	OrioX::setAttr(compact('action'), $attributes);
	OrioX::setAttr(compact('method'), $attributes);
	OrioX::setAttr(compact('class'), $attributes);
	OrioX::toAttr($attributes);
@endphp

<form {!! $attributes !!}>

	@if ($errors->any())
		<div class="error">
			@foreach ($errors->all() as $error)
				<p>{{ $error }}</p>
			@endforeach
		</div>
	@endif

	@csrf

	{{ $slot }}

</form>