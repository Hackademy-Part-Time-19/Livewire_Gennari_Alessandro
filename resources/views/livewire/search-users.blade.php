<div>
    <div class="container-fluid">
        <div class="row">
            <label for="search">Cerca</label>
            <div><input type="text" wire:model.live="search" id="search">
            </div>

            @foreach ($users as $user)

            <div class="card" style="width: 18rem;">
                <div class="card-body">
                  <h5 class="card-title">{{$user->name}}</h5>
                  <p class="card-text">{{$user->email}}</p>
                </div>
              </div>
                
            @endforeach
        </div>
    </div>
</div>
