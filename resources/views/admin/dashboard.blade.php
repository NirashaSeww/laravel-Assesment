<x-layouts.app :title="__('Admin Dashboard')">

    <div class="relative mb-6 w-full">
        <flux:heading size="xl" level="1">{{ __('Dashboard') }}</flux:heading>
        <flux:subheading size="lg" class="mb-6">{{ __('manage all the data') }}</flux:subheading>
        <flux:separator variant="subtle" />
    </div>

    <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">
        <div class="flex justify-between gap-4 p-4">
            <div class="bg-blue-500 text-white p-6 roundad-lg shadow-lg text center flex-1 min-w-[200px]">
                <h2 class="text-lg font-bold">Users</h2>
                <p class="text-2xl font-semibold">100</p>
            </div>
            <div class="bg-green-500 text-white p-6 roundad-lg shadow-lg text center flex-1 min-w-[200px]">
                <h2 class="text-lg font-bold">Users</h2>
                <p class="text-2xl font-semibold">100</p>
            </div>
            <div class="bg-yellow-500 text-white p-6 roundad-lg shadow-lg text center flex-1 min-w-[200px]">
                <h2 class="text-lg font-bold">Users</h2>
                <p class="text-2xl font-semibold">100</p>
            </div>
            <div class="bg-red-500 text-white p-6 roundad-lg shadow-lg text center flex-1 min-w-[200px]">
                <h2 class="text-lg font-bold">Users</h2>
                <p class="text-2xl font-semibold">100</p>
            </div>
        </div>
        
    </div>

</x-layouts.app>
