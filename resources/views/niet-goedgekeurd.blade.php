<x-layout title="Niet goedgekeurd">
    <main class="w-100">
        <x-card>
            <div class="center mb-5">
                <x-logo/>
            </div>

            <h3 class="mb-3">Welkom, {{ ucwords(auth()->user()->name) }}!</h3>

            <p>Uw account is nog niet goedgekeurd door Vitamine Bo.</p>
            <p>Wanneer uw account wordt goedgekeurd ontvangt u een e-mail.</p>

            <form class="mt-5" method="POST" action="/uitloggen">
                @csrf

                <x-form.submit>Uitloggen</x-form.submit>
            </form>
        </x-card>
    </main>
</x-layout>
