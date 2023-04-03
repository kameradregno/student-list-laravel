<header class="text-bg-dark d-flex justify-content-center py-3 bg-gradient">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">

            <a href="{{ url('student') }}" class="d-flex text-light" style="text-decoration: none"><h2>DataSekul</h2></a>

            <div class="d-flex">
                @if (Request::path() == 'login' || Request::is('student/*') || Request::path() == 'register')
                    @php $hide = true; @endphp
                @endif
                @if (!isset($hide))
                <a href="{{ url('student/create') }}" class="btn btn-outline-light ms-5 rounded-0">Tambah Siswa</a>
                @endif
            </div>

            <div class="d-flex justify-content-end align-items-center ms-auto">
                @if (!Auth::check())
                    <a href="{{ url('login') }}" class="btn btn-outline-light me-3 rounded-0">Login</a>
                    <a href="{{ url('register') }}" class="btn btn-outline-warning rounded-0">Register</a>
                @else()
                    <p class="mx-4" style="color: white; border-color: white !important; margin-bottom:1px;"><b><i>{{ Auth::user()->name }}</i></b></p>
                    <a href="{{ url('logout') }}" class="btn btn-outline-warning rounded-0">Logout</a>
                @endif        
            </div>

        </div>

    </div>
</header>
