@props([
    'title',
])

<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>{{ $title }} | {{ config('app.name') }}</title>

		<meta property="og:title" content="{{ $title }} | {{ config('app.name') }}">
		<meta property="og:url" content="{{ url()->current() }}">
		<meta name="robots" content="noindex,nofollow">
		<meta name="csrf-token" content="{{ csrf_token() }}">

		<link rel="canonical" href="{{ url()->current() }}">
		<link rel="shortcut icon" href="{{ asset('favicon.ico') }}">

		@auth
			<script>
	            const Laravel = {
	                'userId': '{{ auth()->id() }}'
	            };
			</script>
		@endauth
		@vite(['resources/css/app.css', 'resources/js/app.js'])
	</head>
	<body>
		<x-general.header/>
		<main>
			<section class="container">
				<div class="row py-lg-3">
					<x-general.notification :$errors/>
					{{ $slot }}
				</div>
			</section>
		</main>
		<x-general.footer/>
	</body>
</html>
