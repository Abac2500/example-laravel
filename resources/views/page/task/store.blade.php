<x-layout :$title>
	<x-general.nav.container/>
	<div class="mt-3">
		<form method="POST" action="{{ route('task.save', ['task' => $task->id]) }}">
			@csrf
			<x-general.form.text label="Название" name="name" type="text" maxlength="255" required>
				{{ old('name', $task?->name) }}
			</x-general.form.text>
			<x-general.form.textarea label="Описание" name="text" rows="5" maxlength="1024" required>
				{{ old('text', $task?->text) }}
			</x-general.form.textarea>
			<x-general.form.select label="Исполнитель" name="user_id" required>
				@foreach($users as $user)
					<option value="{{ $user->id }}" @selected(old('user_id', $task?->user_id) === $user->id)>{{ $user->email }}</option>
				@endforeach
			</x-general.form.select>
			<x-general.form.text label="Дата окончания срока" name="expiration_at" type="date" required>
				{{ old('expiration_at', $task?->expiration_at?->format('Y-m-d')) }}
			</x-general.form.text>
			<x-general.form.button>Продолжить</x-general.form.button>
		</form>
	</div>
</x-layout>