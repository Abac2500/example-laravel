<x-layout :$title>
	<x-general.nav.container/>
	@if($tasks->isNotEmpty())
		<div class="d-flex flex-wrap mb-4">
			@foreach($tasks as $task)
				<x-task.item :$task/>
			@endforeach
		</div>
		{{ $tasks->links('pagination::bootstrap-5') }}
	@endif
</x-layout>