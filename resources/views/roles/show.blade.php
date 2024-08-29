<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Role Details') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="text-lg font-semibold">Role Name: {{ $role->name }}</h3>
                    <h4 class="mt-4 text-lg font-semibold">Permissions:</h4>
                    <ul class="list-disc list-inside">
                        @foreach ($permissions as $permission)
                            <li>{{ $permission->name }}</li>
                        @endforeach
                    </ul>
                    <a href="{{ route('roles.index') }}" class="btn btn-secondary mt-4">Back to Roles</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
