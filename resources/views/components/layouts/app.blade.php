<x-layouts.app.sidebar :title="$title ?? null">
    <flux:main class="bg-gray-100 dark:bg-neutral-900">
        {{ $slot }}
    </flux:main>
</x-layouts.app.sidebar>
