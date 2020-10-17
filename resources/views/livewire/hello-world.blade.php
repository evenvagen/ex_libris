<div>

    <input wire:model.debounce.1000ms="animal" type="text">
    <input wire:model="loud" type="checkbox">

    <select wire:model="greeting" multiple>

        <option>Hello</option>
        <option>Goodbye</option>
        <option>Adios</option>

    </select>

    {{ implode(' + ', $greeting)}} {{$animal}}
    @if($loud) !!! @endif

    <form action="#" wire:submit.prevent="resetName('Bingo')">

        <button>Reset name</button>

    </form>

</div>




