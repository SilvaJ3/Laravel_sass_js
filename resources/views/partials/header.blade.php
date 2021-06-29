<header>
    <div class=" bg-dark">
        <nav class="navbar navbar-expand-lg navbar-light d-flex justify-content-evenly">
            <div class="container d-flex justify-content-evenly w-100">
                <div class="col-6 d-flex justify-content-center">
                    <a class="navbar-brand coding" href="#">{{ env('APP_NAME') }}</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                </div>
                <div class="col-6 collapse navbar-collapse d-flex justify-content-center" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active text-white" aria-current="page" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="/about">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="/services">Services</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    
</header>