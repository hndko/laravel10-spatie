<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Role') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action="{{ route('roles.store') }}" method="POST">
                        @csrf
                        <div class="mb-4">
                            <label for="name" class="block text-sm font-medium text-gray-700">Role Name</label>
                            <input type="text" name="name" id="name" class="mt-1 block w-full" required>
                        </div>

                        <div class="mb-4">
                            <label for="permissions" class="block text-sm font-medium text-gray-700">Permissions</label>
                            @foreach ($permissions as $permission)
                                <div class="flex items-center">
                                    <input type="checkbox" name="permissions[]" value="{{ $permission->name }}"
                                        id="permission_{{ $permission->id }}">
                                    <label for="permission_{{ $permission->id }}"
                                        class="ml-2">{{ $permission->name }}</label>
                                </div>
                            @endforeach
                        </div>

                        <button type="submit" class="btn btn-primary">Create</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
