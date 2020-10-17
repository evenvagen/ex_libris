<div style="text-align: center">
    <button wire:click="increment">+</button>
    <h1 wire:poll.500ms="increment">{{ $count }}</h1>
</div>
