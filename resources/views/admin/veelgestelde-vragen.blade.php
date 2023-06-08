<x-layout title="Veelgestelde vragen" header="Veelgestelde vragen"
          beschrijving="Hier kun je veelgestelde vragen aanmaken, bewerken en verwijderen.">
    <x-card class="w-100">
        <div class="d-flex justify-content-between align-items-center">
            <h3 class="mb-0">Overzicht</h3>
            <x-buttonicon class="btn btn-primary" icon="fa-plus" data-bs-toggle="modal"
                          data-bs-target="#vraagToevoegen">
                Vraag toevoegen
            </x-buttonicon>
        </div>
        <x-modal id="vraagToevoegen" title="Vraag toevoegen">
            <form method="POST" action="/admin/faq">
                @csrf

                <x-input label="Vraag:" name="question" required/>
                <x-input label="Antwoord:" name="answer" required/>
                <x-input label="Pagina:" name="page" required/>
                <x-submit class="btn btn-primary w-100">Toevoegen</x-submit>
            </form>
        </x-modal>
        <table class="table table-striped mt-5">
            <thead>
            <tr>
                <th scope="col">Vraag</th>
                <th scope="col">Antwoord</th>
                <th scope="col">Pagina</th>
                <th scope="col">Actie</th>
            </tr>
            </thead>
            <tbody>
            @foreach($faqs as $faq)
                <tr>
                    <td>{{ $faq->question }}</td>
                    <td>{{ $faq->answer }}</td>
                    <td>{{ $faq->page }}</td>
                    <td class="d-flex">
                        <x-button class="btn btn-sm btn-primary">
                            <i class="fas fa-pen-to-square text-white"></i>
                        </x-button>
                        <x-button class="btn btn-sm btn-danger ms-3">
                            <i class="fas fa-xmark text-white"></i>
                        </x-button>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </x-card>
</x-layout>
