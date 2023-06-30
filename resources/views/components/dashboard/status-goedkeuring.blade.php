<table class="table no-padding-table mb-0">
    <thead>
    <tr>
        <th scope="col">Reden</th>
    </tr>
    </thead>
    <tbody>
    @foreach($redenen as $reden)
        <tr>
            <td>
                <i class="fa-solid fa-xmark text-danger me-2"></i>
                {{ $reden }}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
