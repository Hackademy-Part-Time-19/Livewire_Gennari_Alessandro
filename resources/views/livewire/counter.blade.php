<div>
    <h1>Sono il compononete di livewire</h1>

    <div class="container-fluid">
        <div class="row justify-content-center">
            <h2>Counter:</h2>
            <h1>{{$value}}</h1>
            <div class="row">
                <button class="col-2" wire:click="increment"> Incrementa </button>
                <button class="col-2" wire:click="decrement"> Derementa </button>
            </div>
            
        </div>

    </div>

</div>

