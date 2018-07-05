<nav class="navbar navbar-expand-lg navbar-light">
    <a class="navbar-brand" href="/home"><img id="logo" src="{{ asset('img/logo.png') }}" alt=""></a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link mr-3" href="#">{{ auth()->user()->name }}<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link mr-3" href="/change-password">Change Password<span class="sr-only">(current)</span></a>
            </li>
            @if(auth()->user()->isAdmin())
            <li class="nav-item">
                <a class="nav-link mr-3" href="/admin">Admin Panel<span class="sr-only">(current)</span></a>
            </li>
            @endif
            <li class="nav-item">
                <a class="nav-link" href="/logout">Logout<span class="sr-only">(current)</span></a>
            </li>
        </ul>
    </div>
</nav>
