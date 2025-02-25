<div>
<livewire:navigations>
<div style="margin-top: 7%;">
    <div class="container">
        <h3>Messages from clients</h3><hr>

        <div class="row gap-5 mt-5" wire:poll>
            @foreach ($data as $dt )
            <div class="col-lg-3 shadow p-3">
                <p><b>Names:</b> {{ $dt["client_name"] }}</p>
                <p><i class="fa fa-location"></i> {{ $dt["address"] }}</p>
                <p><i class="fa fa-phone"></i> {{ $dt["client_tel"] }}</p>
                <span class="badge bg-primary  ">
                    <button class="btn" wire:click="heart({{ $dt["id"] }})"><i class="fa fa-heart"></i>
                    @if ($dt["love"]>0)
                        {{ $dt["love"] }}
                    @endif
                </button>
                  
                </span>
                <span class="badge bg-primary">
                    <button class="btn" wire:click="likes({{ $dt["id"] }})"><i class="fa fa-thumbs-up"></i>
                    @if ($dt["likes"]>0)
                        {{ $dt["likes"] }}
                    @endif
                </button>
                  
                </span>
                <span class="badge bg-primary  ">
                    <button class="btn" wire:click="dislikes({{ $dt["id"] }})"><i class="fa fa-thumbs-down"></i>
                    @if ($dt["dislikes"]>0)
                        {{ $dt["dislikes"] }}
                    @endif
                </button>
                    
                </span>
            </div>
            @endforeach
            {{ $data->links() }}
        </div>
    </div>
</div>
</div>
