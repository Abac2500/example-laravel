@aware([
    'title',
])

<nav>
	<div class="nav nav-tabs">
		<x-general.nav.item url="task.index" :param="['view' => 'user']">Мои задачи</x-general.nav.item>
		<x-general.nav.item url="task.index" :param="['view' => 'all']">Все задачи</x-general.nav.item>
		<x-general.nav.item url="task.store">
			{{ request()->routeIs('task.store') ? $title : 'Новая задача' }}
		</x-general.nav.item>
	</div>
</nav>
