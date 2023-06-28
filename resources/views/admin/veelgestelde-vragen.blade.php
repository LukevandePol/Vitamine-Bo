<x-layout title="Veelgestelde vragen" header="Veelgestelde vragen"
          beschrijving="Hier kun je veelgestelde vragen aanmaken, bewerken en verwijderen.">
    <x-card class="w-100">
        <div class="d-flex justify-content-between align-items-center">
            <h3 class="mb-0">Overzicht</h3>
            <x-buttonicon class="btn btn-primary" icon="fa-plus text-white" data-bs-toggle="modal"
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
                <label for="page" class="form-label">Pagina:</label>
                <select class="form-select mb-3" name="page" id="page">
                    <option selected>Selecteer een pagina</option>
                    @foreach($routes as $route)
                        <option value="{{ $route['name'] }}">{{ $route['name'] }}</option>
                    @endforeach
                </select>
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
            @forelse($faqs as $faq)
                <tr>
                    <td>{{ $faq->question }}</td>
                    <td>{{ $faq->answer }}</td>
                    <td>{{ $faq->page }}</td>
                    <td>
                        <div class="d-flex">
                            <x-button class="btn btn-sm btn-primary" data-bs-toggle="modal"
                                      data-bs-target="#bewerken{{ $faq->id }}">
                                <i class="fa-solid fa-pen-to-square text-white"></i>
                            </x-button>
                            <x-modal id="bewerken{{ $faq->id }}" title="Vraag bewerken">
                                <form method="POST" action="{{ route('veelgestelde-vragen-bewerken', $faq->id) }}">
                                    @csrf

                                    <x-input label="Vraag:" name="question" value="{{ $faq->question }}" required/>
                                    <x-input label="Antwoord:" name="answer" value="{{ $faq->answer }}" required/>
                                    <x-input label="Pagina:" name="page" value="{{ $faq->page }}" required/>
                                    <x-submit class="btn btn-primary w-100">Aanpassen</x-submit>
                                </form>
                            </x-modal>
                            <x-button class="btn btn-sm btn-danger ms-2" data-bs-toggle="modal"
                                      data-bs-target="#verwijder{{ $faq->id }}">
                                <i class="fa-solid fa-xmark text-white"></i>
                            </x-button>
                            <x-modal id="verwijder{{ $faq->id }}" title="Vraag bewerken">
                                <form method="POST" action="{{ route('veelgestelde-vragen-bewerken', $faq->id) }}">
                                    @csrf
                                    @method('DELETE')

                                    <p>Weet je zeker dat je deze vraag wilt verwijderen? Deze actie kan niet meer
                                        ongedaan gemaakt worden.</p>
                                    <div class="d-flex">
                                        <button type="button" class="btn btn-secondary me-2 w-100"
                                                data-bs-dismiss="modal">
                                            Annuleren
                                        </button>
                                        <x-submit class="btn btn-primary w-100">Verwijderen</x-submit>
                                    </div>
                                </form>
                            </x-modal>
                        </div>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4">
                        <p class="mb-0">Er zijn geen vragen gevonden in de database.</p>
                    </td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </x-card>
</x-layout>
