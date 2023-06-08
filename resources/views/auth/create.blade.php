<x-guest title="Registreren">
    <div class="container py-5">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <img
                    src="https://images.unsplash.com/photo-1618897996318-5a901fa6ca71?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1364&q=80"
                    width="448" class="rounded shadow" alt="placeholder">
            </div>
            <div class="col-lg-6 my-auto">
                <div class="d-flex justify-content-center align-items-center flex-column mb-5">
                    <x-logo width="120"/>
                    <div class="tab-status my-5">
                        <span class="tab active"></span>
                        <span class="tab"></span>
                        <span class="tab"></span>
                    </div>
                    <h1 class="h2">Registreren</h1>
                </div>

                <form method="POST" action="/registreren">
                    @csrf

                    <x-tabpanel id="login">
                        <x-input label="E-mailadres" type="email" name="email"/>
                        <x-input label="Telefoonnummer:" type="tel" name="telefoon"/>
                        <x-input label="Wachtwoord:" type="password" name="password"/>
                    </x-tabpanel>

                    <x-tabpanel id="bedrijf" class="hidden">
                        <x-input label="KVK-nummer:" name="kvknummer"/>
                        <x-input label="Bedrijfsnaam:" name="name"/>
                    </x-tabpanel>

                    <x-tabpanel id="adres" class="hidden">
                        <x-input label="Huisnummer:" name="huisnummer"/>
                        <x-input label="Postcode:" name="postcode"/>
                    </x-tabpanel>

                    <div class="auth-pagination">
                        <x-button class="btn-primary hidden" id="prev">Vorige</x-button>
                        <x-button class="btn-primary" id="next">Volgende</x-button>
                        <x-submit class="btn btn-primary hidden" id="submit">Registreren</x-submit>
                    </div>
                </form>
                <div class="d-flex justify-content-center mt-3">
                    <a href="/inloggen">Heeft u al een account? Log hier in.</a>
                </div>
            </div>
        </div>
    </div>

    @section('page-scripts')
        @vite(['resources/js/registration.js'])
    @endsection
</x-guest>
