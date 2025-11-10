<header class="p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
	<div class="container">
		<div class="d-flex align-items-center justify-content-between">
			<a class="h5 my-0 mr-md-auto text-decoration-none text-dark" href="{{ route('index') }}">{{ config('app.name') }}</a>
			<div class="d-flex">
				@auth
					<a class="btn btn-outline-success" href="{{ route('task.index', ['view' => 'user']) }}">Управление</a>
					<a class="btn btn-outline-primary ms-3" href="{{ route('user.logout') }}">Выход</a>
				@else
					<a class="btn btn-outline-primary" href="{{ route('user.login') }}">Войти</a>
					<a class="btn btn-outline-dark ms-3" href="{{ route('user.registry') }}">Регистрация</a>
				@endauth
			</div>
		</div>
	</div>
</header>