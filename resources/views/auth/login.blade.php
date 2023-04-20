<x-layout :title="'- Inloggen'">
    <form method="POST" action="/inloggen">
        @csrf

        <div>
            <label for="email">E-mailadres</label>
            <input type="email" name="email" id="email">

            @error('email')
                <p>{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="password">Wachtwoord</label>
            <input type="password" name="password" id="password">
        </div>

        <button type="submit">Inloggen</button>
    </form>
</x-layout>
