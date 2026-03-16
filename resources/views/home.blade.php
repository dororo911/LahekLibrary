<x-guest-layout>
    <div class="text-center space-y-6">
        <div class="flex justify-center">
            <x-application-logo class="w-16 h-16 text-gray-600" />
        </div>

        <div class="space-y-2">
            <p class="text-sm uppercase tracking-wide text-gray-500">Welcome</p>
            <h1 class="text-3xl font-semibold text-gray-900">{{ config('app.name', 'Laravel') }}</h1>
            <p class="text-gray-600 max-w-xl mx-auto">
                Access your dashboard and manage your content. Log in to continue or create an account to get started.
            </p>
        </div>

        <div class="flex items-center justify-center gap-3">
            @auth
                <a
                    href="{{ route('dashboard') }}"
                    class="inline-flex items-center px-5 py-2 text-sm font-medium text-white bg-gray-900 hover:bg-gray-800 rounded-md transition"
                >
                    Go to dashboard
                </a>
            @else
                <a
                    href="{{ route('login') }}"
                    class="inline-flex items-center px-5 py-2 text-sm font-medium text-white bg-gray-900 hover:bg-gray-800 rounded-md transition"
                >
                    Log in
                </a>

                @if (Route::has('register'))
                    <a
                        href="{{ route('register') }}"
                        class="inline-flex items-center px-5 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-300 hover:bg-gray-50 rounded-md transition"
                    >
                        Register
                    </a>
                @endif
            @endauth
        </div>
    </div>
</x-guest-layout>
