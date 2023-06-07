@props(['url'])
<tr>
    <td class="header">
        <a href="{{ $url }}" style="display: inline-block;">
            @if (trim($slot) === 'Laravel')
                <img src="https://vitaminebo.nl/wp-content/uploads/vitamine-bo-logo-300x267.png" class="logo"
                     alt="Vitamine Bo logo">
            @else
                {{ $slot }}
            @endif
        </a>
    </td>
</tr>
