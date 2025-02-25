<div>
<div>
<livewire:navigations>
<div style="margin-top: 7%;">
    <div class="container">
        <h3>clients list</h3><hr>

        <div class="row gap-5 mt-5">
        <table class="table table-striped table-xl">
                <thead>
                    <tr>
                        <th>Customer name</th>
                        <th>telephone</th>
                        <th>address</th>
                        <th>message</th>
                        <th colspan="2">Action</th>
                    </tr>
                </thead>
            <tbody>
            @foreach ($data as $dt )
            
                <tr>
                    <td>{{ $dt["client_name"] }}</td>
                    <td>{{ $dt["client_tel"] }}</td>
                    <td>{{ $dt["address"] }}</td>
                    <td>{{ $dt["message"] }}</td>
                    <td>
                        <button class="btn btn-danger mx-3" wire:confirm="Are you sure you want to delete {{ $dt["client_name"] }} ?" wire:click="delete({{ $dt["id"] }})"><i class="fa fa-trash"></i>
                        <a href="{{ route("edit",[$dt["id"]]) }}" wire:navigate>
                        </button>
                        <button class="btn btn-secondary"><i class="fa fa-edit"></i></button>
                        </a>
                    </td>
                </tr>
            
            @endforeach
        </tbody>
            </table>
        </div>
    </div>
</div>
</div>

</div>
