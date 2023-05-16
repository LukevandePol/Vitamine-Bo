@props(['href'])

<div class="anchor">
    {{--    Dit is de chevron / pijl naast de teskt--}}
    <i class="fa-sharp fa-solid fa-chevron-right" style="color: #5abeeb;"></i>

    <a href="{{$href}}">
        {{$slot}}
    </a>
</div>
