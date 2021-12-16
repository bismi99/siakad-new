<div class="header-top-area">
    <div class="container">
        <nav class="navbar navbar-costum navbar-expand-lg">
            <a class="navbar-brand" href="#">
                <div class="logo-area">
                    <a href="/dashboard" class="text-white"><img src="{{ asset('img/logo.png') }}" width="50" /> SMK
                        PLUS NUSA
                        PUTRA</a>
                </div>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto align-items-center">

                    <li class="nav-item">
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-outline-light">LOGOUT</button>
                        </form>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>
