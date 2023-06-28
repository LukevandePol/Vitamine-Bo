@props(['href'])

<div {{ $attributes->merge(['class' => 'anchor']) }}>
    {{--    Dit is de chevron / pijl naast de teskt--}}
    <i class="fa-sharp fa-solid fa-chevron-right bo-hoofdkleur"></i>

    <a href="{{$href}}">
        {{$slot}}
    </a>
</div>
