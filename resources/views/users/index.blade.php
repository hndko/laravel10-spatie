<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('User Management') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <a href="{{ route('users.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded-md">Create
                        User</a>

                    <table class="min-w-full divide-y divide-gray-200 mt-6">
                        <thead>
                            <tr>
                                <th class="px-6 py-3 bg-gray-50">Name</th>
                                <th class="px-6 py-3 bg-gray-50">Email</th>
                                <th class="px-6 py-3 bg-gray-50">Roles</th>
                                <th class="px-6 py-3 bg-gray-50">Permissions</th>
                                <th class="px-6 py-3 bg-gray-50">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach ($users as $user)
                                <tr>
                                    <td class="px-6 py-4">{{ $user->name }}</td>
                                    <td class="px-6 py-4">{{ $user->email }}</td>
                                    <td class="px-6 py-4">{{ $user->roles->pluck('name')->join(', ') }}</td>
                                    <td class="px-6 py-4">{{ $user->permissions->pluck('name')->join(', ') }}</td>
                                    <td class="px-6 py-4">
                                        <a href="{{ route('users.edit', $user) }}"
                                            class="bg-red-500 text-white px-4 py-2 rounded-md">Edit</a>
                                        <form action="{{ route('users.destroy', $user) }}" method="POST"
                                            style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                class="bg-red-500 text-white px-4 py-2 rounded-md">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
