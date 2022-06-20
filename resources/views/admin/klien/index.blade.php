<x-app-layout>
	<x-slot name="title">Klien</x-slot>

	@if(session()->has('success'))
	<x-alert type="success" message="{{ session()->get('success') }}" />
	@endif
	<x-card>
		<x-slot name="title">All Roles</x-slot>
	</x-card>

	<x-slot name="script">
	</x-slot>
</x-app-layout>
