<x-card>
    <p><strong>Recente Bestellingen</strong></p>
    <div class="form-group">
        <label for="yearFilter">Filter op jaar:</label>
        <select class="form-control" id="yearFilter">
            <option value="0">Alle jaren</option>
            <option value="2023">2023</option>
            <option value="2022">2022</option>
            <option value="2021">2021</option>
            <option value="2020">2020</option>
        </select>
    </div>

    <div class="table-responsive">
        <table class="table table-striped table-sm" id="orderTable">
            <tbody id="orderTableBody">
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
    <div class="row">
        <div class="page-container">
            <div class="rowIndication" id="rowIndication"></div>
            <div class="pagination"></div>
            <div class="pagination-numbers"></div>
        </div>
    </div>


</x-card>
@section('page-scripts')
    @vite(['resources/js/paginationorder.js'])
@endsection
