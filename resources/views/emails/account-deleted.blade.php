<x-mail::message>
    Hallo, {{ $user->name }}<br><br>

    Wij willen u helaas mededelen dat uw account is afgekeurd, met de volgende reden:<br>
    <x-mail::panel>
{{ $reason }}<br><br>
    </x-mail::panel>

    Met vriendelijke groet,<br>

    {{ config('app.name') }}
</x-mail::message>
