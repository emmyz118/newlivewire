<div>
 <livewire:navigations>
<div style="margin-top: 5%;">
    <center>
        <h1>Send you message now</h1>
        <form action="" class="col-lg-5" wire:submit.prevent="addmsg">
            <div class="form-floating mt-3">
                <input type="text" wire:model="cname" id="cname" placeholder="Enter your name" class="form-control">
                <label for="name">Your name</label>
                @error("cname")
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-floating mt-3">
                <input type="tel" wire:model="ctel" id="ctel" placeholder="Enter your telphone" class="form-control">
                <label for="ctel">Your telephone</label>
                @error("ctel")
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-floating mt-3">
                <input type="address" wire:model="caddress" id="addr" placeholder="Enter your addresss" class="form-control" autocomplete>
                <label for="addr">Your addresss</label>
                @error("caddress")
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-floating mt-3">
                <textarea wire:model="msg" cols="20" rows="20" id="msg" class="form-control" placeholder="hh"></textarea>
                <label for="msg">Message</label>
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
