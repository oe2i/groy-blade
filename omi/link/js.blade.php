@props(['src' => null, 'async' => false, 'defer' => false, 'crossorigin' => null, 'type' => 'text/javascript', 'vendor' => false])

@php
	$attributes = OrioX::initAttr();
	OrioX::setAttr(compact('type'), $attributes);
	OrioX::setAttr(compact('async'), $attributes);
	OrioX::setAttr(compact('defer'), $attributes);
	if ($crossorigin === true || $crossorigin === 'true') {
		$crossorigin = 'anonymous';
	}
	OrioX::setAttr(compact('crossorigin'), $attributes);
	OrioX::toAttr($attributes);

	if (!$src) {
		$src = EnvX::theme();
	}
	$orioSrc = OrioX::asset($src);
	if ($orioSrc) {
		$finalSrc = $orioSrc;
	} else {
		$finalSrc = $vendor ? AssetX::vendor($src, false) : AssetX::js($src, false);
	}

	$finalSrc = StrEndX::ifNot($finalSrc, '.js');
	if(!EnvX::prod() && !empty($finalSrc)){
		$finalSrc .= '?'.mt_rand();
	}
@endphp

<script {!! $attributes !!} src="{{ $finalSrc }}"></script>
