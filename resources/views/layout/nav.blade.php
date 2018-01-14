<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#">Blog</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">

                    <a class="nav-link" href="/"><i class="fa fa-home"></i> Home
                    </a>
                </li>
                @if (!Auth::check())
                <li class="nav-item" id="login">
                    <a class="nav-link" href="/login" ><i class="fa fa-sign-in"></i> Login</a>
                </li>
                @endif
                @if (Auth::check())

                <li class="nav-item" id="post">
                    <a class="nav-link" href="/list"><i class="fa fa-user"></i> {{ Auth::user()->name }}
                    </a>
                </li>
                    <li class="nav-item"  id="logout">
                        <a class="nav-link" href="/logout"><i class="fa fa-sign-out"></i> Logout
                        </a>
                    </li>
                @endif

            </ul>
        </div>
    </div>
</nav>