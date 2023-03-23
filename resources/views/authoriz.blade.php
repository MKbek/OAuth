<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
    <div class="flex flex-col items-center gap-2">
        <div class="font-bold text-xl my-2 text-black dark:text-gray-300">Authorization Request</div>
        <div class="text-md text-gray-600 dark:text-gray-400 leading-5">is requesting permission to access your account.</div>
    </div>

    <div class="mt-5 border-y border-gray-200 dark:border-gray-700 p-5 text-black dark:text-stone-400">
        <p><strong>This application will be able to:</strong></p>

        <ul class="ml-3 mt-3">
            <li>Test</li>
        </ul>
    </div>

    <div class="mt-10 flex justify-between gap-5 px-5">
        <button type="submit" class="w-1/2 bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-lg delay-75 transition-colors">Cancel</button>
        <button type="submit" class="w-1/2 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg delay-75 transition-colors">Authorize</button>
    </div>

</x-guest-layout>
