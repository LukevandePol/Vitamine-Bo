<x-guest title="Inloggen">
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-6">
                <img
                    src="https://images.unsplash.com/photo-1619241638225-14d56e47ae64?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1364&q=80"
                    width="448" class="rounded shadow" alt="placeholder">
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
