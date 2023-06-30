<x-card class="small-card">
    <form>
        <div class="row">
            <div class="col-12 ">
                <label for="company">Bedrijfsnaam:</label>
                <input type="text" id="company" name="company" class="form-control" required>
            </div>
        </div>
        <div class="row">
            <div class="col-12 my-3">
                <label for="KvK">KvK-nummer:</label>
                <input type="number" id="KvK" name="KvK" class="form-control" required>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <label for="email">Email:</label>
                <input type="text" id="email" name="email" class="form-control" required>
            </div>
        </div>
        <div class="row">
            <div class="col-12 my-3">
                <label for="phone">Telefoonnummer:</label>
                <input type="number" id="phone" name="phone" class="form-control" required>
            </div>
        </div>

        <div class="row justify-content-end">
            <div class="col-12">
                <x-buttonicon class="mt-2"></x-buttonicon>
            </div>
        </div>
    </form>

</x-card>
