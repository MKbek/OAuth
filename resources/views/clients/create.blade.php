<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Create clients') }}
            </h2>
            <div class="flex flex-row">
                <a href="{{ route('dashboard') }}" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-lg">
                    {{ __('Cancel') }}
                </a>
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    Create new client, please fill in the form below
                </div>
                <div class="p-6 bg-white border-t border-gray-200 dark:bg-gray-800 dark:border-gray-700">
                    <form action="/oauth/clients" method="POST">
                        @csrf
                        <div class="">
                            <x-input-label for="name" :value="__('Name')" />

                            <x-text-input id="name" class="block mt-1 w-full"
                                          type="text"
                                          name="name"
                                          placeholder="My Client"
                                          required />

                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>
                        <div class="mt-5">
                            <x-input-label for="name" :value="__('Callback URI')" />

                            <x-text-input id="redirect" class="block mt-1 w-full"
                                          type="text"
                                          name="redirect"
                                          placeholder="https://example.com/callback"
                                          required />

                            <x-input-error :messages="$errors->get('redirect')" class="mt-2" />
                        </div>
                        <div class="mt-6 mb-4">
                            <x-primary-button class="ml-3">
                                {{ __('Create client') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
