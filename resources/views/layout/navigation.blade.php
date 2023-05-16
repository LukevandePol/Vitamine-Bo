<nav class="navbar navbar-expand-lg bg-white">
    <div class="container">
        <a class="navbar-brand" href="#">
            <x-logo width="100"/>
        </a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                @auth
                    <li class="nav-item">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/account">Account</a>
                    </li>
                @endauth
                @can('isAdmin')
                    <li class="nav-item">
                        <a class="nav-link" href="/admin">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/admin/goedkeuren">Goedkeuren</a>
                    </li>
                @endcan
            </ul>
            <ul class="navbar-nav">
                @auth
                    <li class="nav-item">
                        <form method="POST" action="/uitloggen">
                            @csrf

                            <x-submit>Uitloggen</x-submit>
                        </form>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="/inloggen">Inloggen</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/registreren">Registreren</a>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>
