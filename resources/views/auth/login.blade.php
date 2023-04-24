<x-layout :title="'- Inloggen'">
    <main class="w-100">
        <x-card>
            <div class="center">
                <img src="/images/Logo.png" class="logo" alt="Logo">
            </div>
            <h1 class="h3 mb-3 fw-normal">Log in</h1>

            <form method="POST" action="/inloggen">
                @csrf

                <x-input label="E-mailadres" type="email" name="email" />
                <x-input label="Wachtwoord" type="password" name="password" />
                <div class="form-check mb-3">
                    <input class="form-check-input" type="checkbox" id="remember" name="remember">
                    <label class="form-check-label" for="remember">
                        Onthoud mij
                    </label>
                </div>
                <x-submit>Inloggen</x-submit>
            </form>
        </x-card>
    </main>
</x-layout>
