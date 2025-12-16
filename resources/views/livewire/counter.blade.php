<div class="flex flex-col justify-center items-center h-96 gap-16 transition-all">
    <div class="flex flex-col gap-6">
        <h1 class="text-3xl font-bold">Livewire Counter</h1>
        <div class="flex gap-4 flex-0">
            <button wire:click="inc" class="bg-sky-500 hover:bg-sky-700 text-white rounded-lg p-2 text-xl">Inc</button>
            <span class="bg-cyan-600 text-white text-sky-700 rounded-lg p-3 text-xl">{{ $count }}</span>
            <button wire:click="dec" class="bg-sky-500 hover:bg-sky-700 text-white rounded-lg p-2 text-xl">Dec</button>
            <button wire:click="res" class="bg-red-500 hover:bg-sky-700 text-white rounded-lg p-2 text-xl">Reset</button>
        </div>
    </div>
    <div x-data="{ count: 0 }" class="flex flex-col gap-6">
        <h1 class="text-3xl font-bold">Alpine.js Counter</h1>
        <div class="flex gap-4 flex-0">
            <button @click="count++" class="bg-sky-500 hover:bg-sky-700 text-white rounded-lg p-2 text-xl">Inc</button>
            <span x-text="count" class="bg-cyan-600 text-white text-sky-700 rounded-lg p-3 text-xl"></span>
            <button @click="count--" class="bg-sky-500 hover:bg-sky-700 text-white rounded-lg p-2 text-xl">Dec</button>
            <button @click="count = 0" class="bg-red-500 hover:bg-sky-700 text-white rounded-lg p-2 text-xl">Reset</button>
        </div>
    </div>
</div>
