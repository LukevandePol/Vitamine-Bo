<x-guest title="Inloggen">
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-6">
                <img src="https://picsum.photos/448/704" class="rounded shadow" alt="placeholder">
            </div>
            <div class="col-lg-6 my-auto">
                <div class="d-flex justify-content-center align-items-center flex-column mb-5">
                    <x-logo width="120"/>
                    <h1 class="mt-5 h2">Inloggen</h1>
                </div>

                <form method="post" action="/inloggen">
                    @csrf

                    <x-input label="E-mailadres:" type="email" name="email"/>
                    <x-input label="Wachtwoord:" type="password" name="password"/>

                    <x-submit class="btn btn-primary w-100" id="submit">Inloggen</x-submit>
                </form>
                <div class="d-flex justify-content-center mt-3">
                    <a href="/registreren">Heeft u nog geen account? Maak er hier een aan.</a>
                </div>
            </div>
        </div>
    </div>
</x-guest>
