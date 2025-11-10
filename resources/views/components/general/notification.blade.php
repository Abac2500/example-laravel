@props([
    'errors',
])

@if($errors->any())
	<div class="d-block">
		@foreach($errors->all() as $error)
			<div class="alert alert-danger" role="alert">{{ $error }}</div>
		@endforeach
	</div>
@endif
@if(session()->has('success'))
	<div class="d-block">
		<div class="alert alert-success" role="alert">{{ session('success') }}</div>
	</div>
@endif
