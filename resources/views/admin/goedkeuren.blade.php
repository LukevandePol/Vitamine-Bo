<x-layout>
    <div class="container py-5">
        <h1>Goedkeuren</h1>
        <table class="table mt-5">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Naam</th>
                <th scope="col">Actie</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr class="align-items-center">
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>
                        <form method="POST" action="{{ route('update.status', $user->id) }}">
                            @csrf

                            <x-submit>Goedkeuren</x-submit>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</x-layout>
