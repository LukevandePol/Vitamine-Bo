<x-layout title="Goedkeuren" header="Goedkeuren"
          beschrijving="Hier vind je de lijst met accounts die nog niet zijn goedgekeurd.">
    <x-card class="w-100">
        <h3>Accounts goedkeuren</h3>
        <table class="table table-striped mt-5">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Naam</th>
                <th scope="col">Aangemaakt</th>
                <th scope="col">Actie</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->created_at->format('Y-m-d') }}</td>
                    <td class="d-flex">
                        <form method="POST" action="{{ route('update.status', $user->id) }}">
                            @csrf

                            <x-submit class="btn btn-sm btn-success">
                                <i class="fa-solid fa-check text-white"></i>
                            </x-submit>
                        </form>
                        <form action="#">
                            <x-submit class="btn btn-sm btn-danger ms-3">
                                <i class="fa-solid fa-xmark text-white"></i>
                            </x-submit>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

        <div class="mt-5">
            {{ $users->links('pagination::default') }}
        </div>
    </x-card>
</x-layout>
