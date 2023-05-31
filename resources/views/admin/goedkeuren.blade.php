<x-layout title="Goedkeuren" header="Goedkeuren"
          beschrijving="Hier vind je de lijst met accounts die nog niet zijn goedgekeurd.">
    <x-card class="w-100">
        <h3>Accounts goedkeuren</h3>
        <table class="table table-striped mt-5">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Naam</th>
                <th scope="col">E-mailadres</th>
                <th scope="col">Aangemaakt</th>
                <th scope="col">Actie</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->created_at->format('Y-m-d') }}</td>
                    <td class="d-flex">
                        <x-button class="btn btn-sm btn-success ms-3" data-bs-toggle="modal"
                                  data-bs-target="#approveModal">
                            <i class="fa-solid fa-check text-white"></i>
                        </x-button>
                        <x-modal id="approveModal" title="Weet je het zeker?"
                                 description="Weet je zeker dat je dit account wilt goedkeuren?">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuleren</button>
                            <form method="POST" action="{{ route('account.approve', $user->id) }}">
                                @csrf

                                <x-submit class="btn btn-primary">Bevestigen</x-submit>
                            </form>
                        </x-modal>

                        <x-button class="btn btn-sm btn-danger ms-3" data-bs-toggle="modal"
                                  data-bs-target="#deleteModal">
                            <i class="fa-solid fa-xmark text-white"></i>
                        </x-button>
                        <x-modal id="deleteModal" title="Weet je het zeker?"
                                 description="Weet je zeker dat je dit account wilt verwijderen? Deze actie kan niet meer ongedaan gemaakt worden.">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuleren</button>
                            <form method="POST" action="{{ route('account.destroy', $user->id) }}">
                                @csrf
                                @method('DELETE')

                                <x-submit class="btn btn-primary">Bevestigen</x-submit>
                            </form>
                        </x-modal>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

        <div class="mt-5">
            {{ $users->links('pagination::default') }}
        </div>
    </x-card>


    @section('page-scripts')
        <script>
            // Confirm approving of an account
            function confirmApprove() {
                let confirmYes = confirm('Weet je zeker dat je dit account wilt goedkeuren?');

                if (!confirmYes) {
                    event.preventDefault();
                }

                return confirmYes;
            }
        </script>
    @endsection
</x-layout>
