<x-card class="small-card">
    <form>
        <div class="row">
            <div class="col-12">
                <label for="street">Adres:</label>
                <input type="text" id="street" name="street" class="form-control" required>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 my-3">
                <label for="zip">Postcode:</label>
                <input type="text" id="zip" name="zip" class="form-control" required>
            </div>
            <div class="col-sm-6 my-3">
                <label for="city">Plaats:</label>
                <input type="text" id="city" name="city" class="form-control" required>
            </div>
        </div>
        <div class="row justify-content-end">
            <div class="col-12">
                <x-buttonicon class="mt-2">Aanpassen</x-buttonicon>
            </div>
        </div>
    </form>
</x-card>

