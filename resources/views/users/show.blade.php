<!-- resources/views/users/show.blade.php -->
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('User Details') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="mb-4">
                        <strong class="text-lg">Name:</strong> {{ $user->name }}
                    </div>
                    <div class="mb-4">
                        <strong class="text-lg">Email:</strong> {{ $user->email }}
                    </div>
                    <div class="mb-4">
                        <strong class="text-lg">Roles:</strong> {{ $user->roles->pluck('name')->join(', ') }}
                    </div>
                    <div class="mb-4">
                        <strong class="text-lg">Permissions:</strong>
                        {{ $user->permissions->pluck('name')->join(', ') }}
                    </div>
                    <a href="{{ route('users.edit', $user) }}"
                        class="bg-yellow-500 text-white px-4 py-2 rounded-md">Edit</a>
                    <a href="{{ route('users.index') }}" class="bg-gray-500 text-white px-4 py-2 rounded-md">Back to
                        List</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
