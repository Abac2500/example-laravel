@props([
	'url',
	'param' => [],
])

<a @class([
	'nav-link',
	'active' => request()->routeIs($url) && (!$param || request(array_key_last($param)) === end($param)),
]) href="{{ route($url, $param) }}">{{ $slot }}</a>