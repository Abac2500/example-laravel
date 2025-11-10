@props([
    'label',
    'name',
    'required' => false,
])

<div class="mb-3">
	<label class="form-label" for="form-{{ $name }}">
		@if($required)
			<span class="text-danger">*</span>
		@endif
		{{ $label }}
	</label>
	<input class="form-control" id="form-{{ $name }}" name="{{ $name }}" value="{{ $slot }}" {{ $attributes }} @required($required)>
</div>
