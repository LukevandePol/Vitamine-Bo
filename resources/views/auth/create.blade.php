<x-layout :title="'- Registreren'">
    <main class="w-100">
        <x-card>
            <div class="center">
                <img src="/images/Logo.png" class="logo" alt="Logo">
            </div>

            <h1 class="h3 mb-3 fw-normal">Registreren</h1>

            <form method="POST" action="/registreren">
                @csrf

                <x-input label="Naam:" name="name" />
                <x-input label="Wachtwoord:" type="password" name="password" />
                <x-input label="KvK nummer:" type="number" name="kvknummer" placeholder="8 cijfers" />
                <x-input label="Adres:" name="adres" />
                <x-input label="Telefoonnummer:" type="number" name="telefoon" />
                <x-input label="Postcode:" name="postcode" />
                <x-input label="E-mailadres:" type="email" name="email" />

                <x-submit>Registreren</x-submit>
            </form>
        </x-card>
    </main>
</x-layout>
