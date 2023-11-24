<div class="sm:fixed sm:top-0 p-6 z-10 w-full">
    <div class="flex justify-between">
        <div class="flex justify-start">
            <a href="#" class="text-2xl font-bold text-cyan-500">ZakatEase</a>
        </div>
        <div>
            @auth
                <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500" wire:navigate>Dashboard</a>
            @else
                <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500" wire:navigate>Log in</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ms-4 font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500" wire:navigate>Register</a>
                @endif
            @endauth
        </div>
    </div>
</div>
