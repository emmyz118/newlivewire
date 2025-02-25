<div>
 <livewire:navigations>
<div style="margin-top: 5%;">
    <center>
        <h3>Update client</h3>
        <form action="" class="col-lg-5" wire:submit.prevent="updt">
            <div class="form-floating mt-3">
                <input type="text" wire:model="cname" id="cname" class="form-control">
                
                @error("cname")
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-floating mt-3">
                <input type="tel" wire:model="ctel" id="ctel" class="form-control">
                
                @error("ctel")
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-floating mt-3">
                <input type="address" wire:model="caddress" id="addr"  class="form-control" autocomplete>
                
                @error("caddress")
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-floating mt-3">
                <textarea wire:model="msg" cols="20" rows="20" id="msg" class="form-control"></textarea>
                
                @error("msg")
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="mt-3">
                <button class="btn btn-success">Send</button>
            </div>
            @if (session(":success"))
                <p>{{ session("success") }}</p>
            @endif

        </form>
    </center>
</div>
</div>
