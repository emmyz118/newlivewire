<div>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark mt-2 fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">My Website</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <div class="row">
                    <div class={{ Route::is("home")?"col-lg-3  text-primary bg-danger":"col-lg-3 " }}>
                        <li class="nav-item"><a class="nav-link" href="{{ route("home") }}" wire:navigate>Home</a></li>
                    </div>
                    <div class={{ Route::is("about")?"col-lg-3  text-primary":"col-lg-3" }}>
                        <li class="nav-item"><a class="nav-link" href="{{ route("about") }}"  wire:navigate>About</a></li>
                    </div>
                    <div class={{ Route::is("services")?"col-lg-3  text-primary":"col-lg-3 " }}>
                        <li class="nav-item"><a class="nav-link" href="{{ route("services") }}"  wire:navigate>Services</a></li>
                    </div>
                    <div class={{ Route::is("contacts")?"col-lg-3  text-primary":"col-lg-3 " }}>
                        <li class="nav-item"><a class="nav-link" href="{{ route("contacts") }}"  wire:navigate>Contact</a></li>
                    </div>
                
                </div>
            </ul>
        </div>
    </div>
</nav>
</div>
