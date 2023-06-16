<header class="p-3 bg-dark">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none fs-4" >
                <i class="fa-solid fa-cloud"></i>Data Siswa
            </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
            
        </ul>

            <div class="text-end">
                @guest
                
                @else
                
                <a href="#" class="btn btn-light me-2 fw-bold">{{ Auth::user()->name }}</a>
                <a href="#" onclick="event.preventDefault(); document.getElementById('form-logout').submit();" class="btn btn-danger">Log-out</a>
                <form action="{{ route('logout') }}" method="post" id="form-logout">
                    @csrf
                </form>
                @endguest
            </div>
        </div>
    </div>
</header>