<x-card>
    <p><strong>Recente Bestellingen</strong></p>
    <div class="row">
        <div class="col-md-6 mb-2">
            <div class="d-flex align-items-center jaar-dropdown-container">
                <p class="mb-0 me-2">Jaar</p>
                <div class="dropdown">
                    <button class="btn btn-white dropdown-toggle" type="button" id="yearDropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    </button>
                    <div class="dropdown-menu" aria-labelledby="yearDropdown" id="yearDropdownMenu">
                        <a class="dropdown-item" href="#" data-value="2023">2023</a>
                        <a class="dropdown-item" href="#" data-value="2022">2022</a>
                        <a class="dropdown-item" href="#" data-value="2021">2021</a>
                        <a class="dropdown-item" href="#" data-value="2020">2020</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="table-responsive">
        <table class="table table-striped table-sm" id="myTable">
            <tbody>
            <tr>
                <td>Bam</td>
                <td>Jeverweg 18, 9723 JE Groningen</td>
                <td>20 Mei, 2023</td>
                <td>€178,00</td>
                <td class="in-behandeling bullet-point">• In behandeling</td>
            </tr>
            <tr>
                <td>Bam</td>
                <td>Jeverweg 18, 9723 JE Groningen</td>
                <td>20 April, 2023</td>
                <td>€178,00</td>
                <td class="goedgekeurd bullet-point">• Goedgekeurd</td>
            </tr>
            <tr>
                <td>Bam</td>
                <td>Jeverweg 18, 9723 JE Groningen</td>
                <td>20 Maart, 2023</td>
                <td>€178,00</td>
                <td class="goedgekeurd bullet-point">• Goedgekeurd</td>
            </tr>
            <tr>
                <td>Bam</td>
                <td>Jeverweg 18, 9723 JE Groningen</td>
                <td>20 Februari,2023</td>
                <td>€178,00</td>
                <td class="goedgekeurd bullet-point">• Goedgekeurd</td>
            </tr>
            <tr>
                <td>Bam</td>
                <td>Jeverweg 18, 9723 JE Groningen</td>
                <td>20 Januari, 2023</td>
                <td>€178,00</td>
                <td class="afgekeurd bullet-point">• Afgekeurd</td>
            </tr>
            <tr>
                <td>Bam</td>
                <td>Jeverweg 18, 9723 JE Groningen</td>
                <td>20 December, 2022</td>
                <td>€178,00</td>
                <td class="goedgekeurd bullet-point">• Goedgekeurd</td>
            </tr>
            <tr>
                <td>Bam</td>
                <td>Jeverweg 18, 9723 JE Groningen</td>
                <td>20 November, 2022</td>
                <td>€178,00</td>
                <td class="goedgekeurd bullet-point">• Goedgekeurd</td>
            </tr>
            <tr>
                <td>Bam</td>
                <td>Jeverweg 18, 9723 JE Groningen</td>
                <td>20 Oktober, 2022</td>
                <td>€178,00</td>
                <td class="afgekeurd bullet-point">• Afgekeurd</td>
            </tr>
            <tr>
                <td>Bam</td>
                <td>Jeverweg 18, 9723 JE Groningen</td>
                <td>20 September, 2022</td>
                <td>€178,00</td>
                <td class="goedgekeurd bullet-point">• Goedgekeurd</td>
            </tr>
            <tr>
                <td>Bam</td>
                <td>Jeverweg 18, 9723 JE Groningen</td>
                <td>20 Augustus, 2022</td>
                <td>€178,00</td>
                <td class="goedgekeurd bullet-point">• Goedgekeurd</td>
            </tr>
            <tr>
                <td>Bam</td>
                <td>Jeverweg 18, 9723 JE Groningen</td>
                <td>20 Juli, 2022</td>
                <td>€178,00</td>
                <td class="goedgekeurd bullet-point">• Goedgekeurd</td>
            </tr>
            <tr>
                <td>Bam</td>
                <td>Jeverweg 18, 9723 JE Groningen</td>
                <td>20 Juni, 2022</td>
                <td>€178,00</td>
                <td class="goedgekeurd bullet-point">• Goedgekeurd</td>
            </tr>
            <tr>
                <td>Bam</td>
                <td>Jeverweg 18, 9723 JE Groningen</td>
                <td>20 Mei, 2022</td>
                <td>€178,00</td>
                <td class="goedgekeurd bullet-point">• Goedgekeurd</td>
            </tr>
            <tr>
                <td>Bam</td>
                <td>Jeverweg 18, 9723 JE Groningen</td>
                <td>20 April, 2022</td>
                <td>€178,00</td>
                <td class="goedgekeurd bullet-point">• Goedgekeurd</td>
            </tr>
            <tr>
                <td>Bam</td>
                <td>Jeverweg 18, 9723 JE Groningen</td>
                <td>20 Maart, 2022</td>
                <td>€178,00</td>
                <td class="goedgekeurd bullet-point">• Goedgekeurd</td>
            </tr>
            <tr>
                <td>Bam</td>
                <td>Jeverweg 18, 9723 JE Groningen</td>
                <td>20 Februari, 2022</td>
                <td>€178,00</td>
                <td class="afgekeurd bullet-point">• Afgekeurd</td>
            </tr>
            </tbody>
        </table>
    </div>


</x-card>
@section('page-scripts')
    @vite(['resources/js/paginationorder.js'])
@endsection
