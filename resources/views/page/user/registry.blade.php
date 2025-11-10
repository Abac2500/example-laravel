<x-layout :$title>
	<form method="POST" action="{{ route('user.create') }}">
		@csrf
		<x-general.form.text label="Электронная почта" name="email" type="email" required>
			{{ old('email') }}
		</x-general.form.text>
		<x-general.form.text label="Пароль" name="password" type="password" minlength="8" maxlength="64" required>
			{{ old('password') }}
		</x-general.form.text>
		<x-general.form.text label="Повторите пароль" name="password_confirmation" type="password" minlength="8" maxlength="64" required>
			{{ old('password_confirmation') }}
		</x-general.form.text>
		<x-general.form.button>Продолжить</x-general.form.button>
	</form>
</x-layout>