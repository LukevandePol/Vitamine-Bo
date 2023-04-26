<div>
    <form method="POST" action="/emailAanpassen">
        @csrf
        <label for="email">Email</label>
        <input type="text" id="email"/>
        <x-submit>pas aan</x-submit>
    </form>

    <a href="/">home</a>
</div>
