@php
    $hour = now()->hour;
    $greeting = $hour < 12 ? 'Good Morning' : ($hour < 18 ? 'Good Afternoon' : 'Good Evening');
@endphp

<x-filament::section>
    <h1 class="text-2xl font-semibold">
        {{ $greeting }}, {{ auth()->user()->name }} 👋
    </h1>

    <p class="text-sm text-gray-500 dark:text-gray-400">
        Here's what's happening with your store today.
    </p>
</x-filament::section>
