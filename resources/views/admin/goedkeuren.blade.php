<x-layout title="Goedkeuren" header="Goedkeuren" beschrijving="Hier vind je de lijst met accounts die nog niet zijn goedgekeurd.">
    <x-card class="w-100">
        <h3>Accounts goedkeuren</h3>
        <table class="table table-striped mt-5">
            <thead>
            <tr>
                <th scope="col">Naam</th>
                <th scope="col">E-mailadres</th>
                <th scope="col">Aangemaakt</th>
                <th scope="col">Actie</th>
            </tr>
            </thead>
            <tbody id="orderTableBody">
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->created_at->format('Y-m-d') }}</td>
                    <td class="d-flex">
                        <x-button class="btn btn-sm btn-success ms-3" data-bs-toggle="modal" data-bs-target="#approveModal">
                            <i class="fa-solid fa-check text-white"></i>
                        </x-button>
                        <x-modal id="approveModal" title="Weet je het zeker?">
                            <p>Weet je zeker dat je dit account wilt goedkeuren?</p>
                            <div class="d-flex justify-content-end">
                                <button type="button" class="btn btn-secondary me-2" data-bs-dismiss="modal">Annuleren</button>
                                <form method="POST" action="{{ route('account-goedkeuren', $user->id) }}">
                                    @csrf
                                    <x-submit class="btn btn-primary">Bevestigen</x-submit>
                                </form>
                            </div>
                        </x-modal>

                        <x-button class="btn btn-sm btn-danger ms-3" data-bs-toggle="modal" data-bs-target="#deleteModal">
                            <i class="fa-solid fa-xmark text-white"></i>
                        </x-button>
                        <x-modal id="deleteModal" title="Weet je het zeker?">
                            <p>Weet je zeker dat je dit account wilt verwijderen? Deze actie kan niet meer ongedaan gemaakt worden.</p>
                            <form class="w-100" method="POST" action="{{ route('account-afkeuren', $user->id) }}">
                                @csrf
                                @method('DELETE')
                                <div class="mb-3">
                                    <label for="reden">Reden:</label>
                                    <textarea name="reden" class="form-control" id="reden" rows="3" placeholder="Wat is de reden voor afkeuren?"></textarea>
                                </div>
                                <div class="d-flex justify-content-end">
                                    <button type="button" class="btn btn-secondary me-2" data-bs-dismiss="modal">Annuleren</button>
                                    <x-submit class="btn btn-primary">Afkeuren</x-submit>
                                </div>
                            </form>
                        </x-modal>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

        <div class="mt-2">
            <div class="row">
                <div class="page-container">
                    <div class="rowIndication" id="rowIndication"></div>
                    <div class="pagination"></div>
                </div>
            </div>
        </div>
    </x-card>


    @section('page-scripts')
        @vite(['resources/js/goedkeuren.js'])
    @endsection
</x-layout>
