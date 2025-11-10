@props([
    'label',
    'name',
    'required' => false,
])

<div class="mb-3">
	<label class="form-label">
		<input class="form-check-input" type="checkbox" name="{{ $name }}" value="{{ $slot }}" {{ $attributes }} @required($required)> {{ $label }}
	</label>
</div>