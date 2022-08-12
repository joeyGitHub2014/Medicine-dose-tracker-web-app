
<nav class="navbar navbar-expand-lg navbar-dark bg-dark  ">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse " id="navbarNav" >
        <ul class="navbar-nav ml-auto ">
                @if (Auth::check())
                    <li class="nav-item">
                        <a class="nav-link" href="/logout">LOGOUT</a>                
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="/login">LOGIN </a>
                    </li >
                    <li class="nav-item" >
                        <a class="nav-link" href="/register">REGISTER</a>
                    </li>
                @endif
        </ul>
    </div>
</nav>