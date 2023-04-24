<main class="form-signin w-100 m-auto">
    <form method="POST" action="/inloggen">
        @csrf

        <x-card>
            <h1 class="h3 mb-3 fw-normal">Log in</h1>

            <div class="form-label">
                <label for="email" class="form-label">E-mail</label>
                <input type="text" class="form-control" id="email">
            </div>

            <div class="form-label">
                <label for="Wachtwoord" class="form-label">Wachtwoord</label>
                <input type="password" class="form-control" id="Wachtwoord">
            </div>

            <div class="checkbox mb-3">
                <input type="checkbox" name="remember" id="remember">
                <label for="remember">Onthoud mij</label>
            </div>

            <div class="center w-100">
                <button class="button-login center" type="submit">Inloggen</button>
            </div>
        </x-card>
    </form>
</main>
