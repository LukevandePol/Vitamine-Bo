<x-layout :title="'- Registratie'">
    <form method="POST" action="/registratie">
        @csrf

        <div>
            <label for="name">Naam:</label>
            <input type="text" name="name" id="name" required>
        </div>

        <div>
            <label for="password">Wachtwoord:</label>
            <input type="password" name="password" id="password" required>
        </div>

        <div>
            <label for="kvknummer">KvK nummer:</label>
            <input type="number" name="kvknummer" id="kvknummer" required>
        </div>

        <div>
            <label for="adres">Adres:</label>
            <input type="text" name="adres" id="adres" required>
        </div>

        <div>
            <label for="telefoon">Telefoonnummer:</label>
            <input type="number" name="telefoon" id="telefoon" required>
        </div>

        <div>
            <label for="postcode">Postcode:</label>
            <input type="text" name="postcode" id="postcode" required>
        </div>

        <div>
            <label for="email">E-mailadres:</label>
            <input type="email" name="email" id="email" required>
        </div>

        <button type="submit">Registreren</button>
    </form>
</x-layout>
