<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Clients') }}
            </h2>
            <div class="flex flex-row">
                <a href="{{ route('clients.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg">
                    {{ __('Create') }}
                </a>
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm rounded-xl">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    Here is a list of clients
                </div>
                @foreach($clients as $client)
                    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm border-t border-gray-200 dark:border-gray-700">
                        <div class="p-6 text-gray-900 dark:text-gray-100">
                            <div class="flex justify-between">
                                <div class="flex flex-col">
                                    <div class="font-bold text-xl mb-2"><b>Client:</b> {{ $client->name }}</div>
                                    <div class="text-gray-700 dark:text-gray-300 text-sm"><b>Redirect URI:</b> {{ $client->redirect }}</div>
                                    <div class="text-gray-700 dark:text-gray-300 text-sm"><b>ID:</b> {{ $client->id }}</div>
                                    <div class="text-gray-700 dark:text-gray-300 text-sm"><b>Secret:</b> {{ $client->secret }}</div>
                                </div>
                                <div class="flex flex-row gap-2">
                                    <a href="#" class="h-fit bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg">
                                        {{ __('Edit') }}
                                    </a>
                                    <form action="http://127.0.0.1:8000/oauth/clients/{{ $client->id }}" method="POST">
                                        @csrf
                                        <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-lg">
                                            {{ __('Delete') }}
                                        </button>
                                        @method('DELETE')
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
