<div class="p-16 flex justify-center items-center gap-6">
    <button wire:click="increment" class="px-4 py-2 bg-indigo-500 hover:bg-indigo-600 rounded text-white">+</button>
    <span>{{ $count }}</span>
    <button wire:click="decrement" class="px-4 py-2 bg-indigo-500 hover:bg-indigo-600 rounded text-white">-</button>
</div>
