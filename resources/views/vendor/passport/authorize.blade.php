<x-guest-layout>
    <div class="flex flex-col items-center gap-2">
        <div class="font-bold text-xl my-2 text-black dark:text-gray-300">Authorization Request</div>
        <div class="text-md text-gray-600 dark:text-gray-400 leading-5"><strong class="text-blue-500">{{ $client->name }}</strong> is requesting permission to access your account.</div>
    </div>

    @if (count($scopes) > 0)
        <div class="mt-5 border-y border-gray-200 dark:border-gray-700 p-5 text-black dark:text-stone-400">
            <p><strong>This application will be able to:</strong></p>

            <ul class="ml-3 mt-3">
                @foreach ($scopes as $scope)
                    <li>{{ $scope->description }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="mt-10 mb-4 flex justify-between gap-5 px-5 w-full">
        <form method="post" action="{{ route('passport.authorizations.deny') }}" class="w-1/2">
            @csrf
            @method('DELETE')

            <input type="hidden" name="state" value="{{ $request->state }}">
            <input type="hidden" name="client_id" value="{{ $client->getKey() }}">
            <input type="hidden" name="auth_token" value="{{ $authToken }}">
            <button type="submit" class="w-full bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-lg delay-75 transition-colors">Cancel</button>
        </form>
        <form method="post" action="{{ route('passport.authorizations.approve') }}" class="w-1/2">
            @csrf

            <input type="hidden" name="state" value="{{ $request->state }}">
            <input type="hidden" name="client_id" value="{{ $client->getKey() }}">
            <input type="hidden" name="auth_token" value="{{ $authToken }}">
            <button type="submit" class="w-full bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg delay-75 transition-colors">Authorize</button>
        </form>
    </div>
</x-guest-layout>
